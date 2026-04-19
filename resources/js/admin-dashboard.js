import './bootstrap';
import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('admin-sidebar');
    const overlay = document.getElementById('admin-sidebar-overlay');
    const openButton = document.getElementById('admin-sidebar-open');
    const closeButton = document.getElementById('admin-sidebar-close');

    if (sidebar && overlay && openButton && closeButton) {
        const openSidebar = () => {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        };

        const closeSidebar = () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        };

        openButton.addEventListener('click', openSidebar);
        closeButton.addEventListener('click', closeSidebar);
        overlay.addEventListener('click', closeSidebar);

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeSidebar();
            }
        });
    }

    const hiringCanvas = document.getElementById('hiring-activity-chart');
    const sourceCanvas = document.getElementById('source-mix-chart');
    const jobCanvas = document.getElementById('job-volume-chart');
    const roleCanvas = document.getElementById('role-distribution-chart');

    if (!hiringCanvas || !sourceCanvas || !jobCanvas || !roleCanvas) {
        return;
    }

    Chart.defaults.font.family = 'Inter, system-ui, sans-serif';
    Chart.defaults.color = '#475569';
    Chart.defaults.borderColor = 'rgba(148, 163, 184, 0.16)';

    const hiringData = {
        '7d': {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            applications: [124, 152, 167, 183, 201, 214, 226],
            interviews: [42, 51, 57, 64, 68, 72, 75],
            offers: [8, 9, 11, 12, 14, 15, 18],
        },
        '30d': {
            labels: ['W1', 'W2', 'W3', 'W4'],
            applications: [980, 1120, 1260, 1380],
            interviews: [320, 355, 392, 430],
            offers: [72, 84, 93, 108],
        },
        '90d': {
            labels: ['Jan', 'Feb', 'Mar'],
            applications: [3100, 3650, 4200],
            interviews: [980, 1160, 1310],
            offers: [220, 255, 308],
        },
    };

    const jobData = {
        '7d': {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            values: [42, 49, 56, 54, 63, 68, 72],
        },
        '30d': {
            labels: ['W1', 'W2', 'W3', 'W4'],
            values: [184, 210, 232, 245],
        },
        '90d': {
            labels: ['Jan', 'Feb', 'Mar'],
            values: [610, 680, 742],
        },
    };

    const createAreaGradient = (chart) => {
        const { ctx, chartArea } = chart;

        if (!chartArea) {
            return 'rgba(37, 99, 235, 0.12)';
        }

        const gradient = ctx.createLinearGradient(0, chartArea.top, 0, chartArea.bottom);
        gradient.addColorStop(0, 'rgba(37, 99, 235, 0.36)');
        gradient.addColorStop(1, 'rgba(37, 99, 235, 0.02)');
        return gradient;
    };

    const hiringChart = new Chart(hiringCanvas, {
        type: 'line',
        data: {
            labels: hiringData['7d'].labels,
            datasets: [
                {
                    label: 'Applications',
                    data: hiringData['7d'].applications,
                    borderColor: '#2563eb',
                    backgroundColor: (context) => createAreaGradient(context.chart),
                    tension: 0.42,
                    fill: true,
                    pointBackgroundColor: '#2563eb',
                    pointRadius: 4,
                },
                {
                    label: 'Interviews',
                    data: hiringData['7d'].interviews,
                    borderColor: '#0ea5e9',
                    backgroundColor: '#0ea5e9',
                    tension: 0.42,
                    fill: false,
                    pointBackgroundColor: '#0ea5e9',
                    pointRadius: 4,
                },
                {
                    label: 'Offers',
                    data: hiringData['7d'].offers,
                    borderColor: '#10b981',
                    backgroundColor: '#10b981',
                    tension: 0.42,
                    fill: false,
                    pointBackgroundColor: '#10b981',
                    pointRadius: 4,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: {
                mode: 'index',
                intersect: false,
            },
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        boxWidth: 10,
                        boxHeight: 10,
                        padding: 18,
                    },
                },
                tooltip: {
                    backgroundColor: 'rgba(15, 23, 42, 0.95)',
                    padding: 12,
                    displayColors: true,
                },
            },
            scales: {
                x: {
                    grid: {
                        display: false,
                    },
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: (value) => value.toLocaleString(),
                    },
                },
            },
        },
    });

    const sourceChart = new Chart(sourceCanvas, {
        type: 'doughnut',
        data: {
            labels: ['Referral', 'Job boards', 'Career site', 'Social'],
            datasets: [{
                data: [34, 29, 21, 16],
                backgroundColor: ['#2563eb', '#38bdf8', '#10b981', '#94a3b8'],
                borderColor: '#ffffff',
                borderWidth: 3,
                hoverOffset: 6,
            }],
        },
        options: {
            cutout: '68%',
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });

    const jobChart = new Chart(jobCanvas, {
        type: 'bar',
        data: {
            labels: jobData['7d'].labels,
            datasets: [{
                label: 'Jobs published',
                data: jobData['7d'].values,
                borderRadius: 12,
                backgroundColor: ['#dbeafe', '#bfdbfe', '#93c5fd', '#60a5fa', '#3b82f6', '#2563eb', '#1d4ed8'],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
            },
            scales: {
                x: {
                    grid: {
                        display: false,
                    },
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: (value) => value.toLocaleString(),
                    },
                },
            },
        },
    });

    const roleChart = new Chart(roleCanvas, {
        type: 'doughnut',
        data: {
            labels: ['Recruiters', 'Employers', 'Job Seekers'],
            datasets: [{
                data: [45, 30, 25],
                backgroundColor: ['#2563eb', '#38bdf8', '#10b981'],
                borderColor: '#ffffff',
                borderWidth: 3,
            }],
        },
        options: {
            cutout: '72%',
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });

    const rangeButtons = Array.from(document.querySelectorAll('[data-range-group="hiring"] [data-range]'));

    const setActiveRange = (button) => {
        rangeButtons.forEach((candidate) => {
            const isActive = candidate === button;
            candidate.classList.toggle('bg-slate-950', isActive);
            candidate.classList.toggle('text-white', isActive);
            candidate.classList.toggle('border', !isActive);
            candidate.classList.toggle('border-slate-200', !isActive);
            candidate.classList.toggle('text-slate-700', !isActive);
        });
    };

    rangeButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const range = button.dataset.range;
            const hiringRange = hiringData[range];
            const jobsRange = jobData[range];

            if (!hiringRange || !jobsRange) {
                return;
            }

            hiringChart.data.labels = hiringRange.labels;
            hiringChart.data.datasets[0].data = hiringRange.applications;
            hiringChart.data.datasets[1].data = hiringRange.interviews;
            hiringChart.data.datasets[2].data = hiringRange.offers;
            hiringChart.update();

            jobChart.data.labels = jobsRange.labels;
            jobChart.data.datasets[0].data = jobsRange.values;
            jobChart.update();

            setActiveRange(button);
        });
    });

    setActiveRange(rangeButtons[0]);

    window.addEventListener('resize', () => {
        hiringChart.resize();
        sourceChart.resize();
        jobChart.resize();
        roleChart.resize();
    });
});
