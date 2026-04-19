@extends('layouts.recruiter')

@section('title', 'Create Job - HireFlow Recruiter')

@section('content')
    <div class="mx-auto max-w-5xl space-y-6">
        <section class="overflow-hidden rounded-3xl border border-slate-700/80 bg-slate-900/70 shadow-lg shadow-slate-950/40 ring-1 ring-slate-800/60">
            <div class="border-b border-slate-700/70 bg-linear-to-r from-slate-950 via-slate-900 to-blue-950 px-6 py-5 text-white">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <p class="text-xs font-semibold tracking-[0.18em] text-blue-200">CREATE POSITION</p>
                        <h2 class="mt-1 text-2xl font-bold tracking-tight">Post a new role</h2>
                        <p class="mt-1 text-sm text-blue-100/90">The form is now on a dedicated page for easier posting and validation.</p>
                    </div>
                    <a href="{{ route('recruiter.jobs') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-white/25 bg-white/10 px-4 py-2 text-sm font-semibold text-white transition hover:bg-white/15">Back to jobs</a>
                </div>
            </div>

            <form class="space-y-6 p-6" action="{{ route('recruiter.job.store') }}" method="POST">
                @csrf

                @if (session('success'))
                    <div class="alert-message flex items-start justify-between gap-3 rounded-2xl border border-emerald-500/40 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-300" role="status" aria-live="polite">
                        <span>{{ session('success') }}</span>
                        <button type="button" class="alert-close shrink-0 text-emerald-300 transition hover:text-emerald-200" aria-label="Close alert">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                @elseif (session('error'))
                    <div class="alert-message flex items-start justify-between gap-3 rounded-2xl border border-red-500/40 bg-red-500/10 px-4 py-3 text-sm text-red-300" role="alert" aria-live="assertive">
                        <span>{{ session('error') }}</span>
                        <button type="button" class="alert-close shrink-0 text-red-300 transition hover:text-red-200" aria-label="Close alert">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                @endif

                <div class="grid gap-5 md:grid-cols-2">
                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Job title</span>
                        <input type="text" name="job_title" value="{{ old('job_title') }}"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                            placeholder="e.g. Senior Product Designer">
                        @error('job_title')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Company name</span>
                        <input type="text" name="company_name" value="{{ old('company_name') }}"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                            placeholder="e.g. HireFlow Pvt Ltd">
                        @error('company_name')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Department</span>
                        <select name="department"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20">
                            <option value="Product" {{ old('department') == 'Product' ? 'selected' : '' }}>Product</option>
                            <option value="Engineering" {{ old('department') == 'Engineering' ? 'selected' : '' }}>Engineering</option>
                            <option value="Operations" {{ old('department') == 'Operations' ? 'selected' : '' }}>Operations</option>
                            <option value="HR" {{ old('department') == 'HR' ? 'selected' : '' }}>HR</option>
                            <option value="Design" {{ old('department') == 'Design' ? 'selected' : '' }}>Design</option>
                        </select>
                        @error('department')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Location</span>
                        <input type="text" name="location" value="{{ old('location') }}"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                            placeholder="Remote, Hybrid, On-site">
                        @error('location')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Work type</span>
                        <select name="work_type"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20">
                            <option value="Remote" {{ old('work_type') == 'Remote' ? 'selected' : '' }}>Remote</option>
                            <option value="Hybrid" {{ old('work_type') == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                            <option value="On-site" {{ old('work_type') == 'On-site' ? 'selected' : '' }}>On-site</option>
                        </select>
                        @error('work_type')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Employment type</span>
                        <select name="employment_type"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20">
                            <option value="Full-time" {{ old('employment_type') == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                            <option value="Part-time" {{ old('employment_type') == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                            <option value="Contract" {{ old('employment_type') == 'Contract' ? 'selected' : '' }}>Contract</option>
                            <option value="Internship" {{ old('employment_type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                            <option value="Temporary" {{ old('employment_type') == 'Temporary' ? 'selected' : '' }}>Temporary</option>
                        </select>
                        @error('employment_type')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Experience level</span>
                        <select name="experience_level"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20">
                            <option value="Junior" {{ old('experience_level') == 'Junior' ? 'selected' : '' }}>Junior</option>
                            <option value="Mid-level" {{ old('experience_level') == 'Mid-level' ? 'selected' : '' }}>Mid-level</option>
                            <option value="Senior" {{ old('experience_level') == 'Senior' ? 'selected' : '' }}>Senior</option>
                            <option value="Lead" {{ old('experience_level') == 'Lead' ? 'selected' : '' }}>Lead</option>
                        </select>
                        @error('experience_level')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Min experience (years)</span>
                        <input type="number" name="min_experience_in_years" min="0" step="1" value="{{ old('min_experience_in_years') }}"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                            placeholder="2">
                        @error('min_experience_in_years')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Hiring urgency</span>
                        <select name="hiring_urgency"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20">
                            <option value="Low" {{ old('hiring_urgency') == 'Low' ? 'selected' : '' }}>Low</option>
                            <option value="Medium" {{ old('hiring_urgency') == 'Medium' ? 'selected' : '' }}>Medium</option>
                            <option value="High" {{ old('hiring_urgency') == 'High' ? 'selected' : '' }}>High</option>
                            <option value="Critical" {{ old('hiring_urgency') == 'Critical' ? 'selected' : '' }}>Critical</option>
                        </select>
                        @error('hiring_urgency')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Salary min</span>
                        <input type="number" name="salary_min" min="0" step="1" value="{{ old('salary_min') }}"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                            placeholder="90000">
                        @error('salary_min')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Salary max</span>
                        <input type="number" name="salary_max" min="0" step="1" value="{{ old('salary_max') }}"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                            placeholder="120000">
                        @error('salary_max')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Currency</span>
                        <select name="salary_currency"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20">
                            <option value="USD" {{ old('salary_currency') == 'USD' ? 'selected' : '' }}>USD</option>
                            <option value="INR" {{ old('salary_currency') == 'INR' ? 'selected' : '' }}>INR</option>
                            <option value="PKR" {{ old('salary_currency') == 'PKR' ? 'selected' : '' }}>PKR</option>
                            <option value="EUR" {{ old('salary_currency') == 'EUR' ? 'selected' : '' }}>EUR</option>
                            <option value="GBP" {{ old('salary_currency') == 'GBP' ? 'selected' : '' }}>GBP</option>
                        </select>
                        @error('salary_currency')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>
                </div>

                <div class="grid gap-5 lg:grid-cols-2">
                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Skills</span>
                        <div class="skill-tag-input" data-skill-component>
                            <input type="hidden" name="skills" data-skills-hidden value="[]">
                            <div class="skill-tag-control w-full rounded-xl border border-slate-700 bg-[#020b26] px-3 py-3 text-sm text-slate-100 transition focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-500/20">
                                <div class="skill-tag-list" data-skill-tags></div>
                                <input type="text" data-skill-input placeholder="Type a skill and press Enter"
                                    class="skill-tag-text-input border-0 bg-transparent px-1 text-sm text-slate-100 outline-none placeholder:text-slate-500"
                                    value="{{ old('skills') ? implode(', ', json_decode(old('skills'))) : '' }}">
                            </div>
                            <div data-skill-suggestions class="skill-suggestions hidden"></div>
                        </div>
                        @error('skills')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Closing date</span>
                        <div class="relative">
                            <input id="closing-date" type="text" name="closing_date" data-flatpickr value="{{ old('closing_date') }}"
                                class="job-date-input w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 pr-12 text-sm text-slate-100 outline-none transition placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                                placeholder="Select closing date">
                            <button type="button" data-date-trigger data-date-target="closing-date"
                                class="absolute right-2 top-1/2 -translate-y-1/2 inline-flex h-8 w-8 items-center justify-center rounded-lg border border-white/20 bg-white/5 text-white transition hover:bg-white/10"
                                aria-label="Open calendar">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                    <path d="M16 2v4"></path>
                                    <path d="M8 2v4"></path>
                                    <path d="M3 10h18"></path>
                                </svg>
                            </button>
                        </div>
                        @error('closing_date')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>
                </div>

                <div class="grid gap-5 lg:grid-cols-2">
                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Responsibilities</span>
                        <textarea name="responsibilities" rows="4"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                            placeholder="List key responsibilities...">{{ old('responsibilities') }}</textarea>
                        @error('responsibilities')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>

                    <label class="space-y-2">
                        <span class="text-sm font-semibold text-slate-200">Role summary</span>
                        <textarea name="role_summary" rows="4"
                            class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                            placeholder="What should this role do in the company?">{{ old('role_summary') }}</textarea>
                        @error('role_summary')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </label>
                </div>

                <label class="space-y-2">
                    <span class="text-sm font-semibold text-slate-200">Job description</span>
                    <textarea name="job_description" rows="5"
                        class="w-full rounded-xl border border-slate-700 bg-[#020b26] px-4 py-2.5 text-sm text-slate-100 outline-none transition placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                        placeholder="Complete description, requirements, benefits, and process...">{{ old('job_description') }}</textarea>
                    @error('job_description')
                        <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                            <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                        </p>
                    @enderror
                </label>

                <div class="flex flex-wrap items-center gap-3">
                    <button type="submit" name="action" value="draft"
                        class="rounded-xl border border-slate-600 bg-slate-900/80 px-5 py-2.5 text-sm font-semibold text-slate-200 transition hover:bg-slate-800 cursor-pointer">Save as Draft</button>
                    <button type="submit" name="action" value="publish"
                        class="rounded-xl bg-linear-to-r from-blue-500 via-blue-600 to-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-blue-900/40 transition hover:-translate-y-0.5 hover:shadow-xl hover:shadow-blue-900/60 cursor-pointer">Post Job Now</button>
                </div>
            </form>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Alert close button functionality
            document.querySelectorAll('.alert-close').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const alert = btn.closest('.alert-message');
                    if (alert) {
                        alert.style.animation = 'slideOutUp 0.3s ease-out';
                        setTimeout(function() {
                            alert.remove();
                        }, 300);
                    }
                });
            });

            const customSelects = [];

            function closeCustomSelects(except) {
                customSelects.forEach(function(instance) {
                    if (instance === except) {
                        return;
                    }

                    instance.wrapper.classList.remove('is-open');
                    instance.menu.classList.add('hidden');
                    instance.trigger.setAttribute('aria-expanded', 'false');
                });
            }

            document.querySelectorAll('form select').forEach(function(select) {
                if (select.dataset.customSelectInit === '1') {
                    return;
                }

                select.dataset.customSelectInit = '1';

                const wrapper = document.createElement('div');
                wrapper.className = 'custom-select';

                const trigger = document.createElement('button');
                trigger.type = 'button';
                trigger.className = 'custom-select-trigger';
                trigger.setAttribute('aria-haspopup', 'listbox');
                trigger.setAttribute('aria-expanded', 'false');

                const label = document.createElement('span');
                label.className = 'custom-select-label';

                const chevron = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                chevron.setAttribute('viewBox', '0 0 20 20');
                chevron.setAttribute('fill', 'none');
                chevron.setAttribute('stroke', 'currentColor');
                chevron.setAttribute('stroke-width', '1.8');
                chevron.setAttribute('stroke-linecap', 'round');
                chevron.setAttribute('stroke-linejoin', 'round');
                chevron.classList.add('custom-select-chevron');
                const chevronPath = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                chevronPath.setAttribute('d', 'm6 8 4 4 4-4');
                chevron.appendChild(chevronPath);

                trigger.appendChild(label);
                trigger.appendChild(chevron);

                const menu = document.createElement('div');
                menu.className = 'custom-select-menu hidden';
                menu.setAttribute('role', 'listbox');

                const optionButtons = [];
                let focusedIndex = -1;

                function updateSelection(value) {
                    let selectedText = '';

                    optionButtons.forEach(function(button) {
                        const isSelected = button.dataset.value === value;
                        button.classList.toggle('is-selected', isSelected);

                        if (isSelected) {
                            selectedText = button.dataset.label;
                        }
                    });

                    if (!selectedText && optionButtons.length) {
                        selectedText = optionButtons[0].dataset.label;
                    }

                    label.textContent = selectedText;
                }

                Array.from(select.options).forEach(function(option) {
                    if (option.disabled) {
                        return;
                    }

                    const item = document.createElement('button');
                    item.type = 'button';
                    item.className = 'custom-select-option';
                    item.dataset.value = option.value;
                    item.dataset.label = option.text;

                    const itemText = document.createElement('span');
                    itemText.textContent = option.text;

                    const itemCheck = document.createElement('span');
                    itemCheck.className = 'custom-select-check';
                    itemCheck.setAttribute('aria-hidden', 'true');
                    itemCheck.textContent = '✓';

                    item.appendChild(itemText);
                    item.appendChild(itemCheck);

                    item.addEventListener('click', function() {
                        select.value = item.dataset.value;
                        select.dispatchEvent(new Event('change', { bubbles: true }));
                        updateSelection(select.value);
                        closeCustomSelects();
                        trigger.focus();
                    });

                    menu.appendChild(item);
                    optionButtons.push(item);
                });

                select.classList.add('custom-select-native');
                select.parentNode.insertBefore(wrapper, select);
                wrapper.appendChild(select);
                wrapper.appendChild(trigger);
                wrapper.appendChild(menu);

                updateSelection(select.value || (optionButtons[0] ? optionButtons[0].dataset.value : ''));

                trigger.addEventListener('click', function() {
                    const isOpen = wrapper.classList.contains('is-open');

                    closeCustomSelects();

                    if (!isOpen) {
                        wrapper.classList.add('is-open');
                        menu.classList.remove('hidden');
                        trigger.setAttribute('aria-expanded', 'true');
                        focusedIndex = -1;
                        updateFocusedItem(-1);
                    }
                });

                function updateFocusedItem(index) {
                    optionButtons.forEach(function(btn, i) {
                        btn.classList.toggle('is-focused', i === index);
                    });
                    focusedIndex = index;
                }

                trigger.addEventListener('keydown', function(event) {
                    const isOpen = wrapper.classList.contains('is-open');
                    
                    if (event.key === 'ArrowDown') {
                        event.preventDefault();
                        
                        if (!isOpen) {
                            wrapper.classList.add('is-open');
                            menu.classList.remove('hidden');
                            trigger.setAttribute('aria-expanded', 'true');
                        }
                        
                        if (focusedIndex < optionButtons.length - 1) {
                            updateFocusedItem(focusedIndex + 1);
                        } else {
                            updateFocusedItem(0);
                        }
                    } else if (event.key === 'ArrowUp') {
                        event.preventDefault();
                        
                        if (!isOpen) {
                            wrapper.classList.add('is-open');
                            menu.classList.remove('hidden');
                            trigger.setAttribute('aria-expanded', 'true');
                        }
                        
                        if (focusedIndex > 0) {
                            updateFocusedItem(focusedIndex - 1);
                        } else {
                            updateFocusedItem(optionButtons.length - 1);
                        }
                    } else if (event.key === 'Enter' && isOpen && focusedIndex !== -1) {
                        event.preventDefault();
                        optionButtons[focusedIndex].click();
                    }
                });

                select.addEventListener('change', function() {
                    updateSelection(select.value);
                });

                customSelects.push({ wrapper: wrapper, trigger: trigger, menu: menu });
            });

            document.addEventListener('click', function(event) {
                const target = event.target;
                const insideCustomSelect = target.closest('.custom-select');

                if (!insideCustomSelect) {
                    closeCustomSelects();
                }
            });

            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    closeCustomSelects();
                }
            });

            const firstValidationError = document.querySelector('[data-field-error]');

            if (firstValidationError) {
                firstValidationError.scrollIntoView({ behavior: 'smooth', block: 'center' });

                const fieldWrapper = firstValidationError.closest('label');
                const focusTarget = fieldWrapper
                    ? fieldWrapper.querySelector('input:not([type="hidden"]), select, textarea, .custom-select-trigger')
                    : null;

                if (focusTarget) {
                    window.setTimeout(function() {
                        focusTarget.focus({ preventScroll: true });
                    }, 250);
                }
            }
        });
    </script>
@endsection
