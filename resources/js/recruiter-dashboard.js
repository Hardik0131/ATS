import './bootstrap';
import Chart from 'chart.js/auto';
import flatpickr from 'flatpickr';
import 'flatpickr/dist/flatpickr.min.css';

document.addEventListener('DOMContentLoaded', () => {
    const SKILL_SUGGESTIONS = [
        'PHP', 'Laravel', 'JavaScript', 'TypeScript', 'MySQL', 'PostgreSQL', 'SQLite', 'MongoDB',
        'HTML', 'CSS', 'Tailwind CSS', 'Bootstrap', 'React', 'Vue.js', 'Node.js', 'Express.js',
        'REST API', 'GraphQL', 'Git', 'GitHub', 'GitLab', 'Docker', 'Kubernetes',
        'AWS', 'Azure', 'GCP', 'CI/CD', 'Nginx', 'Apache',
        'Python', 'Django', 'Flask', 'Java', 'Spring Boot', 'C#', '.NET',
        'Testing', 'Unit Testing', 'Integration Testing', 'Jest', 'PHPUnit',
        'Leadership', 'Team Management', 'People Management', 'Project Management', 'Product Management',
        'Stakeholder Management', 'Vendor Management', 'Risk Management', 'Budget Management',
        'Agile', 'Scrum', 'Kanban', 'Jira', 'Confluence',
        'Communication', 'Problem Solving', 'Critical Thinking', 'Decision Making',
        'Time Management', 'Mentoring', 'Coaching', 'Conflict Resolution',
        'Recruitment', 'Talent Acquisition', 'Sourcing', 'Interviewing', 'ATS Management',
        'Performance Management', 'Workforce Planning', 'Onboarding', 'Training & Development',
        'Negotiation', 'Presentation Skills', 'Data Analysis', 'Business Analysis', 'Reporting'
    ];

    const initSkillTagInput = (component) => {
        const textInput = component.querySelector('[data-skill-input]');
        const tagsContainer = component.querySelector('[data-skill-tags]');
        const suggestionsContainer = component.querySelector('[data-skill-suggestions]');
        const hiddenInput = component.querySelector('[data-skills-hidden]');

        if (!textInput || !tagsContainer || !suggestionsContainer || !hiddenInput) {
            return;
        }

        const selectedSkills = [];
        let activeSuggestionIndex = -1;
        let currentSuggestions = [];

        const normalizeSkill = (skill) => skill.trim().replace(/\s+/g, ' ');
        const hasSkill = (skill) => selectedSkills.some((item) => item.toLowerCase() === skill.toLowerCase());

        const syncHiddenValue = () => {
            hiddenInput.value = JSON.stringify(selectedSkills);
        };

        const renderTags = () => {
            tagsContainer.innerHTML = '';

            selectedSkills.forEach((skill) => {
                const chip = document.createElement('span');
                chip.className = 'skill-chip';
                chip.dataset.skill = skill;
                chip.innerHTML = `<span>${skill}</span><button type="button" data-skill-remove aria-label="Remove ${skill}">&times;</button>`;

                tagsContainer.appendChild(chip);
            });
        };

        tagsContainer.addEventListener('click', (event) => {
            const removeButton = event.target.closest('[data-skill-remove]');

            if (!removeButton) {
                textInput.focus();
                return;
            }

            event.preventDefault();
            event.stopPropagation();

            const chip = removeButton.closest('.skill-chip');
            const skill = chip?.dataset.skill;
            if (!skill) {
                return;
            }

            const index = selectedSkills.findIndex((item) => item.toLowerCase() === skill.toLowerCase());
            if (index !== -1) {
                selectedSkills.splice(index, 1);
                renderTags();
                renderSuggestions(textInput.value);
                syncHiddenValue();
            }
        });

        const closeSuggestions = () => {
            suggestionsContainer.classList.add('hidden');
            suggestionsContainer.innerHTML = '';
            activeSuggestionIndex = -1;
            currentSuggestions = [];
        };

        const setActiveSuggestion = (index) => {
            const items = suggestionsContainer.querySelectorAll('.skill-suggestion-item');
            items.forEach((item, itemIndex) => {
                item.classList.toggle('is-active', itemIndex === index);
            });
            activeSuggestionIndex = index;
        };

        const renderSuggestions = (query) => {
            const term = query.trim().toLowerCase();

            if (!term) {
                closeSuggestions();
                return;
            }

            const matches = SKILL_SUGGESTIONS
                .filter((skill) => skill.toLowerCase().includes(term))
                .filter((skill) => !hasSkill(skill));

            if (!matches.length) {
                closeSuggestions();
                return;
            }

            suggestionsContainer.innerHTML = '';
            currentSuggestions = matches;

            matches.forEach((skill, index) => {
                const item = document.createElement('button');
                item.type = 'button';
                item.className = 'skill-suggestion-item';
                item.textContent = skill;
                item.addEventListener('mouseenter', () => {
                    setActiveSuggestion(index);
                });
                item.addEventListener('click', () => {
                    addSkill(skill);
                });
                suggestionsContainer.appendChild(item);
            });

            suggestionsContainer.classList.remove('hidden');
            setActiveSuggestion(0);
        };

        const addSkill = (value) => {
            const normalized = normalizeSkill(value);

            if (!normalized || hasSkill(normalized)) {
                textInput.value = '';
                renderSuggestions('');
                return;
            }

            const suggestedMatch = SKILL_SUGGESTIONS.find((skill) => skill.toLowerCase() === normalized.toLowerCase());
            selectedSkills.push(suggestedMatch || normalized);
            renderTags();
            syncHiddenValue();
            textInput.value = '';
            closeSuggestions();
        };

        textInput.addEventListener('input', () => {
            renderSuggestions(textInput.value);
        });

        textInput.addEventListener('keydown', (event) => {
            const suggestionsOpen = !suggestionsContainer.classList.contains('hidden') && currentSuggestions.length > 0;

            if (event.key === 'ArrowDown' && suggestionsOpen) {
                event.preventDefault();
                const nextIndex = activeSuggestionIndex < currentSuggestions.length - 1 ? activeSuggestionIndex + 1 : 0;
                setActiveSuggestion(nextIndex);
                return;
            }

            if (event.key === 'ArrowUp' && suggestionsOpen) {
                event.preventDefault();
                const prevIndex = activeSuggestionIndex > 0 ? activeSuggestionIndex - 1 : currentSuggestions.length - 1;
                setActiveSuggestion(prevIndex);
                return;
            }

            if (event.key === 'Escape' && suggestionsOpen) {
                event.preventDefault();
                closeSuggestions();
                return;
            }

            if (event.key === 'Backspace' && !textInput.value.trim() && selectedSkills.length) {
                selectedSkills.pop();
                renderTags();
                syncHiddenValue();
                return;
            }

            if (event.key !== 'Enter') {
                return;
            }

            event.preventDefault();

            if (suggestionsOpen && activeSuggestionIndex >= 0 && currentSuggestions[activeSuggestionIndex]) {
                addSkill(currentSuggestions[activeSuggestionIndex]);
                return;
            }

            addSkill(textInput.value);
        });

        document.addEventListener('click', (event) => {
            if (!component.contains(event.target)) {
                closeSuggestions();
            }
        });

        syncHiddenValue();
    };

    document.querySelectorAll('[data-skill-component]').forEach((component) => {
        initSkillTagInput(component);
    });

    const sidebar = document.getElementById('recruiter-sidebar');
    const overlay = document.getElementById('recruiter-sidebar-overlay');
    const openButton = document.getElementById('recruiter-sidebar-open');
    const closeButton = document.getElementById('recruiter-sidebar-close');

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

        document.querySelectorAll('[data-recruiter-nav-link]').forEach((link) => {
            link.addEventListener('click', () => {
                if (window.matchMedia('(max-width: 1023px)').matches) {
                    closeSidebar();
                }
            });
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeSidebar();
            }
        });
    }

    const dropdowns = Array.from(document.querySelectorAll('[data-recruiter-dropdown]'));

    const closeDropdowns = (except = null) => {
        dropdowns.forEach((dropdown) => {
            if (dropdown === except) {
                return;
            }

            const menu = dropdown.querySelector('[data-dropdown-menu]');
            const button = dropdown.querySelector('[data-dropdown-button]');

            if (menu) {
                menu.classList.add('hidden');
            }

            if (button) {
                button.setAttribute('aria-expanded', 'false');
            }
        });
    };

    dropdowns.forEach((dropdown) => {
        const button = dropdown.querySelector('[data-dropdown-button]');
        const menu = dropdown.querySelector('[data-dropdown-menu]');
        const label = dropdown.querySelector('[data-dropdown-label]');

        if (!button || !menu || !label) {
            return;
        }

        button.setAttribute('aria-expanded', 'false');

        button.addEventListener('click', (event) => {
            event.stopPropagation();
            const isHidden = menu.classList.contains('hidden');
            closeDropdowns(dropdown);
            menu.classList.toggle('hidden', !isHidden);
            button.setAttribute('aria-expanded', String(isHidden));
        });

        menu.querySelectorAll('[data-dropdown-option]').forEach((option) => {
            option.addEventListener('click', (event) => {
                event.stopPropagation();
                const value = option.dataset.dropdownOption || option.textContent.trim();
                label.textContent = value;
                menu.querySelectorAll('[data-dropdown-check]').forEach((check) => check.classList.add('hidden'));

                const check = option.querySelector('[data-dropdown-check]');
                if (check) {
                    check.classList.remove('hidden');
                }

                menu.classList.add('hidden');
                button.setAttribute('aria-expanded', 'false');
            });
        });
    });

    document.addEventListener('click', () => {
        closeDropdowns();
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeDropdowns();
        }
    });

    document.querySelectorAll('[data-flatpickr]').forEach((input) => {
        flatpickr(input, {
            dateFormat: 'Y-m-d',
            altInput: true,
            altFormat: 'd M Y',
            disableMobile: true,
            altInputClass: 'job-date-input job-date-alt-input w-full rounded-2xl border border-slate-700 bg-[#020b26] px-4 py-3 pr-12 text-sm text-slate-100 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20',
            prevArrow: '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"></path></svg>',
            nextArrow: '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"></path></svg>',
        });
    });

    document.querySelectorAll('[data-date-trigger]').forEach((button) => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-date-target');
            if (!targetId) {
                return;
            }

            const input = document.getElementById(targetId);
            if (!input) {
                return;
            }

            if (input._flatpickr) {
                input._flatpickr.open();
                return;
            }

            if (typeof input.showPicker === 'function') {
                input.showPicker();
                return;
            }

            input.focus();
            input.click();
        });
    });

    const miniRangeData = {
        '7d': {
            labels: ['Applied', 'Screen', 'Interview', 'Offer', 'Hired'],
            funnel: [96, 58, 34, 12, 6],
            jobs: [38, 30, 24, 18, 10],
            trendLabels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            trend: [2, 3, 2, 4, 3, 4, 5],
        },
        '30d': {
            labels: ['Applied', 'Screen', 'Interview', 'Offer', 'Hired'],
            funnel: [362, 214, 118, 42, 20],
            jobs: [122, 104, 86, 72, 58],
            trendLabels: ['W1', 'W2', 'W3', 'W4'],
            trend: [12, 14, 13, 17],
        },
        '90d': {
            labels: ['Applied', 'Screen', 'Interview', 'Offer', 'Hired'],
            funnel: [1025, 615, 322, 138, 66],
            jobs: [320, 289, 252, 198, 171],
            trendLabels: ['M1', 'M2', 'M3'],
            trend: [44, 52, 60],
        },
    };

    const mainRangeData = {
        '7d': {
            trendLabels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            trend: [3, 2, 4, 3, 5, 4, 6],
            funnelLabels: ['Applied', 'Screened', 'Interviewed', 'Offered', 'Hired'],
            funnel: [98, 61, 37, 14, 7],
        },
        '30d': {
            trendLabels: ['W1', 'W2', 'W3', 'W4'],
            trend: [11, 14, 12, 16],
            funnelLabels: ['Applied', 'Screened', 'Interviewed', 'Offered', 'Hired'],
            funnel: [380, 226, 134, 49, 25],
        },
        '90d': {
            trendLabels: ['Jan', 'Feb', 'Mar'],
            trend: [41, 54, 63],
            funnelLabels: ['Applied', 'Screened', 'Interviewed', 'Offered', 'Hired'],
            funnel: [1080, 655, 366, 156, 72],
        },
    };

    const charts = {};

    const createChart = (canvasId, config) => {
        const el = document.getElementById(canvasId);
        if (!el) {
            return null;
        }
        return new Chart(el, config);
    };

    charts.miniFunnel = createChart('recruiter-funnel-chart', {
        type: 'bar',
        data: {
            labels: miniRangeData['7d'].labels,
            datasets: [{
                data: miniRangeData['7d'].funnel,
                backgroundColor: ['#1d4ed8', '#2563eb', '#3b82f6', '#60a5fa', '#93c5fd'],
                borderRadius: 8,
            }],
        },
        options: {
            indexAxis: 'y',
            plugins: { legend: { display: false } },
            scales: { x: { grid: { color: '#e2e8f0' } }, y: { grid: { display: false } } },
            maintainAspectRatio: false,
        },
    });

    charts.miniJobs = createChart('recruiter-applications-chart', {
        type: 'bar',
        data: {
            labels: ['Design', 'PM', 'Eng', 'Ops', 'Data'],
            datasets: [{
                data: miniRangeData['7d'].jobs,
                backgroundColor: ['#93c5fd', '#60a5fa', '#3b82f6', '#2563eb', '#1d4ed8'],
                borderRadius: 10,
            }],
        },
        options: {
            plugins: { legend: { display: false } },
            scales: { x: { grid: { display: false } }, y: { grid: { color: '#e2e8f0' } } },
            maintainAspectRatio: false,
        },
    });

    charts.miniTrend = createChart('recruiter-trend-chart', {
        type: 'line',
        data: {
            labels: miniRangeData['7d'].trendLabels,
            datasets: [{
                data: miniRangeData['7d'].trend,
                borderColor: '#1d4ed8',
                backgroundColor: 'rgba(37, 99, 235, 0.15)',
                fill: true,
                tension: 0.35,
                pointRadius: 3,
            }],
        },
        options: {
            plugins: { legend: { display: false } },
            scales: { x: { grid: { display: false } }, y: { grid: { color: '#e2e8f0' }, beginAtZero: true } },
            maintainAspectRatio: false,
        },
    });

    charts.mainTrend = createChart('recruiter-main-trend-chart', {
        type: 'line',
        data: {
            labels: mainRangeData['7d'].trendLabels,
            datasets: [{
                label: 'Hires',
                data: mainRangeData['7d'].trend,
                borderColor: '#1d4ed8',
                backgroundColor: 'rgba(37, 99, 235, 0.12)',
                fill: true,
                tension: 0.3,
            }],
        },
        options: {
            plugins: { legend: { display: false } },
            scales: { x: { grid: { display: false } }, y: { grid: { color: '#e2e8f0' }, beginAtZero: true } },
            maintainAspectRatio: false,
        },
    });

    charts.mainSource = createChart('recruiter-main-source-chart', {
        type: 'doughnut',
        data: {
            labels: ['Referral', 'Job Boards', 'Career Site', 'Social'],
            datasets: [{
                data: [34, 29, 21, 16],
                backgroundColor: ['#1d4ed8', '#3b82f6', '#60a5fa', '#93c5fd'],
            }],
        },
        options: {
            plugins: { legend: { position: 'bottom' } },
            maintainAspectRatio: false,
        },
    });

    charts.mainFunnel = createChart('recruiter-main-funnel-chart', {
        type: 'bar',
        data: {
            labels: mainRangeData['7d'].funnelLabels,
            datasets: [{
                data: mainRangeData['7d'].funnel,
                backgroundColor: ['#1d4ed8', '#2563eb', '#3b82f6', '#60a5fa', '#93c5fd'],
                borderRadius: 9,
            }],
        },
        options: {
            indexAxis: 'y',
            plugins: { legend: { display: false } },
            scales: { x: { grid: { color: '#e2e8f0' } }, y: { grid: { display: false } } },
            maintainAspectRatio: false,
        },
    });

    const setActiveButton = (group, range) => {
        group.querySelectorAll('button[data-range]').forEach((button) => {
            const isActive = button.dataset.range === range;
            button.classList.toggle('bg-slate-950', isActive);
            button.classList.toggle('text-white', isActive);
            button.classList.toggle('border', !isActive);
            button.classList.toggle('border-slate-300', !isActive);
            button.classList.toggle('text-slate-700', !isActive);
        });
    };

    document.querySelectorAll('[data-range-group="recruiter-mini"]').forEach((group) => {
        group.querySelectorAll('button[data-range]').forEach((button) => {
            button.addEventListener('click', () => {
                const range = button.dataset.range;
                const data = miniRangeData[range];
                if (!data) {
                    return;
                }

                if (charts.miniFunnel) {
                    charts.miniFunnel.data.labels = data.labels;
                    charts.miniFunnel.data.datasets[0].data = data.funnel;
                    charts.miniFunnel.update();
                }

                if (charts.miniJobs) {
                    charts.miniJobs.data.datasets[0].data = data.jobs;
                    charts.miniJobs.update();
                }

                if (charts.miniTrend) {
                    charts.miniTrend.data.labels = data.trendLabels;
                    charts.miniTrend.data.datasets[0].data = data.trend;
                    charts.miniTrend.update();
                }

                setActiveButton(group, range);
            });
        });
    });

    document.querySelectorAll('[data-range-group="recruiter-main"]').forEach((group) => {
        group.querySelectorAll('button[data-range]').forEach((button) => {
            button.addEventListener('click', () => {
                const range = button.dataset.range;
                const data = mainRangeData[range];
                if (!data) {
                    return;
                }

                if (charts.mainTrend) {
                    charts.mainTrend.data.labels = data.trendLabels;
                    charts.mainTrend.data.datasets[0].data = data.trend;
                    charts.mainTrend.update();
                }

                if (charts.mainFunnel) {
                    charts.mainFunnel.data.labels = data.funnelLabels;
                    charts.mainFunnel.data.datasets[0].data = data.funnel;
                    charts.mainFunnel.update();
                }

                setActiveButton(group, range);
            });
        });
    });
});