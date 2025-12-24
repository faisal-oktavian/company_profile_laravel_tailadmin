@extends('layouts.fullscreen-layout')

@section('content')
    
        <!-- <link rel="stylesheet" href="style.css"> -->
        <style>
            /* Clean Banking Login Form - Complete & Self-Contained */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
                /* background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); */
                background: linear-gradient(135deg, #191a4f 0%, #696995 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 20px;
                line-height: 1.6;
            }

            .login-container {
                width: 100%;
                max-width: 400px;
            }

            .login-card {
                background: #ffffff;
                border-radius: 16px;
                padding: 40px 32px 32px;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                border: 1px solid #f1f5f9;
                position: relative;
            }

            .login-header {
                text-align: center;
                margin-bottom: 32px;
            }

            .logo {
                margin-bottom: 16px;
                display: flex;
                justify-content: center;
            }

            .login-header h1 {
                color: #1e293b;
                font-size: 1.75rem;
                font-weight: 700;
                margin-bottom: 6px;
                letter-spacing: -0.025em;
            }

            .login-header p {
                color: #64748b;
                font-size: 14px;
                font-weight: 500;
            }

            /* Form Styles */
            .form-group {
                margin-bottom: 20px;
                position: relative;
            }

            .form-group label {
                display: block;
                font-size: 13px;
                font-weight: 600;
                color: #374151;
                margin-bottom: 6px;
            }

            .form-group input {
                width: 100%;
                background: #ffffff;
                border: 1.5px solid #e2e8f0;
                border-radius: 8px;
                padding: 12px 14px;
                color: #1e293b;
                font-size: 15px;
                font-weight: 400;
                outline: none;
                transition: all 0.2s ease;
                font-family: inherit;
            }

            .form-group input:focus {
                border-color: #6366F1;
                box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
            }

            .form-group input::placeholder {
                color: #94a3b8;
            }

            /* Password Field */
            .password-wrapper {
                position: relative;
            }

            .password-wrapper input {
                padding-right: 44px;
            }

            .password-toggle {
                position: absolute;
                right: 12px;
                top: 50%;
                transform: translateY(-50%);
                background: none;
                border: none;
                cursor: pointer;
                color: #64748b;
                padding: 6px;
                border-radius: 4px;
                transition: color 0.2s ease;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .password-toggle:hover {
                color: #6366F1;
            }

            .eye-closed {
                display: none;
            }

            .password-toggle.show-password .eye-open {
                display: none;
            }

            .password-toggle.show-password .eye-closed {
                display: block;
            }

            /* Form Options */
            .form-options {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 24px;
                flex-wrap: wrap;
                gap: 12px;
            }

            .checkbox-wrapper {
                display: flex;
                align-items: center;
                cursor: pointer;
                font-size: 13px;
                color: #374151;
                font-weight: 500;
            }

            .checkbox-wrapper input[type="checkbox"] {
                display: none;
            }

            .checkmark {
                width: 16px;
                height: 16px;
                border: 1.5px solid #d1d5db;
                border-radius: 3px;
                margin-right: 8px;
                position: relative;
                transition: all 0.2s ease;
                background: #ffffff;
            }

            .checkbox-wrapper input[type="checkbox"]:checked + .checkmark {
                background: #6366F1;
                border-color: #6366F1;
            }

            .checkmark::after {
                content: '';
                position: absolute;
                left: 4px;
                top: 1px;
                width: 3px;
                height: 7px;
                border: solid white;
                border-width: 0 1.5px 1.5px 0;
                transform: rotate(45deg);
                opacity: 0;
                transition: opacity 0.2s ease;
            }

            .checkbox-wrapper input[type="checkbox"]:checked + .checkmark::after {
                opacity: 1;
            }

            .forgot-link {
                color: #6366F1;
                text-decoration: none;
                font-size: 13px;
                font-weight: 600;
                transition: color 0.2s ease;
            }

            .forgot-link:hover {
                color: #4f46e5;
            }

            /* Login Button */
            .login-btn {
                width: 100%;
                background: #6366F1;
                color: #ffffff;
                border: none;
                border-radius: 8px;
                padding: 12px 20px;
                cursor: pointer;
                font-family: inherit;
                font-size: 15px;
                font-weight: 600;
                position: relative;
                margin-bottom: 20px;
                transition: all 0.2s ease;
                overflow: hidden;
                min-height: 44px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .login-btn:hover {
                background: #4f46e5;
                transform: translateY(-1px);
                box-shadow: 0 4px 12px rgba(99, 102, 241, 0.4);
            }

            .login-btn:active {
                transform: translateY(0);
            }

            .login-btn:disabled {
                background: #9ca3af;
                cursor: not-allowed;
                transform: none;
                box-shadow: none;
            }

            .btn-text {
                transition: opacity 0.2s ease;
            }

            .btn-loader {
                position: absolute;
                opacity: 0;
                transition: opacity 0.2s ease;
            }

            .spinner {
                width: 16px;
                height: 16px;
                border: 2px solid rgba(255, 255, 255, 0.3);
                border-top: 2px solid #ffffff;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }

            .login-btn.loading .btn-text {
                opacity: 0;
            }

            .login-btn.loading .btn-loader {
                opacity: 1;
            }

            /* Security Notice */
            .security-notice {
                display: flex;
                align-items: center;
                gap: 8px;
                padding: 12px 16px;
                background: #f0fdf4;
                border: 1px solid #bbf7d0;
                border-radius: 8px;
                margin-bottom: 16px;
            }

            .security-notice span {
                color: #166534;
                font-size: 12px;
                font-weight: 500;
            }

            /* Error States */
            .error-message {
                color: #dc2626;
                font-size: 12px;
                font-weight: 500;
                margin-top: 4px;
                opacity: 0;
                transform: translateY(-2px);
                transition: all 0.2s ease;
            }

            .error-message.show {
                opacity: 1;
                transform: translateY(0);
            }

            .form-group.error input {
                border-color: #dc2626;
                background: #fef2f2;
            }

            .form-group.error input:focus {
                box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
            }

            /* Success Message */
            .success-message {
                display: none;
                text-align: center;
                padding: 32px 20px;
                opacity: 0;
                transform: translateY(16px);
                transition: all 0.3s ease;
            }

            .success-message.show {
                display: block;
                opacity: 1;
                transform: translateY(0);
            }

            .success-icon {
                margin: 0 auto 16px;
                animation: successScale 0.5s ease-out;
            }

            @keyframes successScale {
                0% { transform: scale(0); }
                50% { transform: scale(1.1); }
                100% { transform: scale(1); }
            }

            .success-message h3 {
                color: #1e293b;
                font-size: 1.25rem;
                font-weight: 700;
                margin-bottom: 4px;
            }

            .success-message p {
                color: #64748b;
                font-size: 14px;
                font-weight: 500;
            }

            /* Mobile Responsive */
            @media (max-width: 480px) {
                body {
                    padding: 16px;
                }
                
                .login-card {
                    padding: 32px 24px 24px;
                    border-radius: 12px;
                }
                
                .login-header h1 {
                    font-size: 1.5rem;
                }
                
                .form-options {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 12px;
                }
                
                .security-notice {
                    flex-direction: column;
                    text-align: center;
                    gap: 6px;
                }
            }
        </style>
        


        <div class="login-container">
            <div class="login-card">
                <div class="login-header">
                    <div class="logo">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <rect width="36" height="36" rx="8" fill="#6366F1"/>
                            <path d="M12 14h12v8H12v-8zm2 2v4h8v-4h-8zm-2-4h12v2H12v-2zm0 12h12v2H12v-2z" fill="white"/>
                        </svg>
                    </div>
                    <h1>Welcome Back</h1>
                    <p>Sign in to Dashboard</p>
                </div>

                {{-- Server notifications (placed above the form to avoid input-level white flash) --}}
                @if($errors->any())
                    <div id="serverNotification" role="alert" style="background: rgba(239,68,68,0.1); border: 1px solid rgba(239,68,68,0.3); border-radius: 12px; padding: 12px 16px; margin-bottom: 16px; color: #ef4444; text-align: center; font-size: 14px; animation: slideIn 0.3s ease;">
                        {{ $errors->first() }}
                    </div>
                @endif
                @if(session('status'))
                    <div id="serverNotificationSuccess" role="status" style="background: rgba(34,197,94,0.06); border: 1px solid rgba(34,197,94,0.18); border-radius: 12px; padding: 12px 16px; margin-bottom: 16px; color: #059669; text-align: center; font-size: 14px; animation: slideIn 0.3s ease;">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="login-form" id="loginForm" novalidate action="{{ route('admin.login.post') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required autocomplete="email">
                        <span class="error-message" id="emailError"></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="password-wrapper">
                            <input type="password" id="password" name="password" required autocomplete="current-password">
                            <button type="button" class="password-toggle" id="passwordToggle" aria-label="Toggle password visibility">
                                <svg class="eye-open" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M9 3.75C5.25 3.75 2.04 6.24 1.5 9c.54 2.76 3.75 5.25 7.5 5.25s6.96-2.49 7.5-5.25c-.54-2.76-3.75-5.25-7.5-5.25zm0 8.75a3.5 3.5 0 110-7 3.5 3.5 0 010 7zm0-5.5a2 2 0 100 4 2 2 0 000-4z" fill="currentColor"/>
                                </svg>
                                <svg class="eye-closed" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M2.25 2.25l13.5 13.5m-4.125-4.125a3 3 0 01-4.243-4.243m4.243 4.243L9 9m2.625 2.625L15 15M9 5.25c1.83 0 3.51.63 4.84 1.68M3.16 6.93A10.97 10.97 0 019 5.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <span class="error-message" id="passwordError"></span>
                    </div>

                    <button type="submit" class="login-btn">
                        <span class="btn-text">Sign In</span>
                        <div class="btn-loader">
                            <div class="spinner"></div>
                        </div>
                    </button>
                </form>
            </div>
        </div>

        <!-- <script src="../../shared/js/form-utils.js"></script> -->
        <!-- <script src="script.js"></script> -->

        <!-- Shared Form Utilities -->
        <!-- This file contains common functionality used across all login forms -->
        <script>
            class FormUtils {
                static validateEmail(value) {
                    if (!value) {
                        return { isValid: false, message: 'Email address is required' };
                    }
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(value)) {
                        return { isValid: false, message: 'Please enter a valid email address' };
                    }
                    return { isValid: true };
                }
                
                static validatePassword(value) {
                    if (!value) {
                        return { isValid: false, message: 'Password is required' };
                    }
                    // if (value.length < 8) {
                    //     return { isValid: false, message: 'Password must be at least 8 characters long' };
                    // }
                    // if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/.test(value)) {
                    //     return { isValid: false, message: 'Password must contain uppercase, lowercase, and number' };
                    // }
                    return { isValid: true };
                }
                
                static showError(fieldName, message) {
                    const formGroup = document.getElementById(fieldName).closest('.form-group');
                    const errorElement = document.getElementById(fieldName + 'Error');
                    
                    if (formGroup && errorElement) {
                        formGroup.classList.add('error');
                        errorElement.textContent = message;
                        errorElement.classList.add('show');
                        
                        // Add shake animation to the field
                        const field = document.getElementById(fieldName);
                        if (field) {
                            field.style.animation = 'shake 0.5s ease-in-out';
                            setTimeout(() => {
                                field.style.animation = '';
                            }, 500);
                        }
                    }
                }
                
                static clearError(fieldName) {
                    const formGroup = document.getElementById(fieldName).closest('.form-group');
                    const errorElement = document.getElementById(fieldName + 'Error');
                    
                    if (formGroup && errorElement) {
                        formGroup.classList.remove('error');
                        errorElement.classList.remove('show');
                        setTimeout(() => {
                            errorElement.textContent = '';
                        }, 300);
                    }
                }
                
                static showSuccess(fieldName) {
                    const field = document.getElementById(fieldName);
                    const wrapper = field?.closest('.input-wrapper');
                    
                    if (wrapper) {
                        // Add subtle success indication
                        wrapper.style.borderColor = '#22c55e';
                        setTimeout(() => {
                            wrapper.style.borderColor = '';
                        }, 2000);
                    }
                }
                
                static simulateLogin(email, password) {
                    return new Promise((resolve, reject) => {
                        // Simulate network delay
                        setTimeout(() => {
                            // Demo: reject if email is 'admin@demo.com' and password is 'wrongpassword'
                            if (email === 'admin@demo.com' && password === 'wrongpassword') {
                                reject(new Error('Invalid email or password'));
                            } else {
                                resolve({ success: true, user: { email } });
                            }
                        }, 2000);
                    });
                }
                
                static showNotification(message, type = 'info', container = null) {
                    // Prefer passed container, else place into serverNotification area above form if present,
                    // otherwise fallback to form element (will append at end).
                    const serverArea = document.getElementById('serverNotification') || document.getElementById('serverNotificationSuccess');
                    const targetContainer = container || serverArea || document.querySelector('form');
                    if (!targetContainer) return;

                    // Remove any existing notification inside the target so message appears in the header area
                    const existing = targetContainer.querySelector && targetContainer.querySelector('.notification');
                    if (existing) existing.remove();

                    // Create notification element
                    const notification = document.createElement('div');
                    notification.className = `notification ${type}`;

                    let backgroundColor, borderColor, textColor;
                    switch (type) {
                        case 'error':
                            backgroundColor = 'rgba(239, 68, 68, 0.06)';
                            borderColor = 'rgba(239, 68, 68, 0.18)';
                            textColor = '#ef4444';
                            break;
                        case 'success':
                            backgroundColor = 'rgba(34, 197, 94, 0.06)';
                            borderColor = 'rgba(34, 197, 94, 0.18)';
                            textColor = '#059669';
                            break;
                        default:
                            backgroundColor = 'rgba(6, 182, 212, 0.06)';
                            borderColor = 'rgba(6, 182, 212, 0.18)';
                            textColor = '#06b6d4';
                    }

                    notification.innerHTML = `
                        <div style="
                            background: ${backgroundColor}; 
                            backdrop-filter: blur(6px); 
                            border: 1px solid ${borderColor}; 
                            border-radius: 12px; 
                            padding: 12px 16px; 
                            margin-bottom: 16px; 
                            color: ${textColor}; 
                            text-align: center;
                            font-size: 14px;
                            animation: slideIn 0.2s ease;
                        ">
                            ${message}
                        </div>
                    `;

                    // If target is a form, insert before the form so it appears above the inputs
                    if (targetContainer.tagName && targetContainer.tagName.toLowerCase() === 'form') {
                        targetContainer.parentNode.insertBefore(notification, targetContainer);
                    } else {
                        targetContainer.appendChild(notification);
                    }

                    // Auto-remove after 5s
                    setTimeout(() => {
                        notification.style.animation = 'slideOut 0.2s ease';
                        setTimeout(() => notification.remove(), 200);
                    }, 5000);
                }
                
                static setupFloatingLabels(form) {
                    const inputs = form.querySelectorAll('input');
                    inputs.forEach(input => {
                        // Check if field has value on page load
                        if (input.value.trim() !== '') {
                            input.classList.add('has-value');
                        }
                        
                        input.addEventListener('input', () => {
                            if (input.value.trim() !== '') {
                                input.classList.add('has-value');
                            } else {
                                input.classList.remove('has-value');
                            }
                        });
                    });
                }
                
                static setupPasswordToggle(passwordInput, toggleButton) {
                    if (toggleButton && passwordInput) {
                        toggleButton.addEventListener('click', () => {
                            const isPassword = passwordInput.type === 'password';
                            const eyeIcon = toggleButton.querySelector('.eye-icon');
                            
                            passwordInput.type = isPassword ? 'text' : 'password';
                            if (eyeIcon) {
                                eyeIcon.classList.toggle('show-password', isPassword);
                            }
                            
                            // Add smooth transition effect
                            toggleButton.style.transform = 'scale(0.9)';
                            setTimeout(() => {
                                toggleButton.style.transform = 'scale(1)';
                            }, 150);
                            
                            // Keep focus on password input
                            passwordInput.focus();
                        });
                    }
                }
                
                static addEntranceAnimation(element, delay = 100) {
                    if (element) {
                        element.style.opacity = '0';
                        element.style.transform = 'translateY(30px)';
                        
                        setTimeout(() => {
                            element.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                            element.style.opacity = '1';
                            element.style.transform = 'translateY(0)';
                        }, delay);
                    }
                }
                
                static addSharedAnimations() {
                    // Add CSS animations to document head if not already present
                    if (!document.getElementById('shared-animations')) {
                        const style = document.createElement('style');
                        style.id = 'shared-animations';
                        style.textContent = `
                            @keyframes slideIn {
                                from { opacity: 0; transform: translateY(-10px); }
                                to { opacity: 1; transform: translateY(0); }
                            }
                            
                            @keyframes slideOut {
                                from { opacity: 1; transform: translateY(0); }
                                to { opacity: 0; transform: translateY(-10px); }
                            }
                            
                            @keyframes shake {
                                0%, 100% { transform: translateX(0); }
                                25% { transform: translateX(-5px); }
                                75% { transform: translateX(5px); }
                            }
                            
                            @keyframes checkmarkPop {
                                0% { transform: scale(0); }
                                50% { transform: scale(1.3); }
                                100% { transform: scale(1); }
                            }
                            
                            @keyframes successPulse {
                                0% { transform: scale(0); }
                                50% { transform: scale(1.1); }
                                100% { transform: scale(1); }
                            }
                            
                            @keyframes spin {
                                0% { transform: translate(-50%, -50%) rotate(0deg); }
                                100% { transform: translate(-50%, -50%) rotate(360deg); }
                            }
                        `;
                        document.head.appendChild(style);
                    }
                }
            }
        </script>

        <!-- Clean Banking Login Form JavaScript -->
        <script>
            class CleanBankingLoginForm {
                constructor() {
                    this.form = document.getElementById('loginForm');
                    this.emailInput = document.getElementById('email');
                    this.passwordInput = document.getElementById('password');
                    this.passwordToggle = document.getElementById('passwordToggle');
                    this.submitButton = this.form.querySelector('.login-btn');
                    this.successMessage = document.getElementById('successMessage');
                    
                    this.init();
                }
                
                init() {
                    this.bindEvents();
                    this.setupPasswordToggle();
                }
                
                bindEvents() {
                    this.form.addEventListener('submit', (e) => this.handleSubmit(e));
                    this.emailInput.addEventListener('blur', () => this.validateEmail());
                    this.passwordInput.addEventListener('blur', () => this.validatePassword());
                    this.emailInput.addEventListener('input', () => this.clearError('email'));
                    this.passwordInput.addEventListener('input', () => this.clearError('password'));
                }
                
                setupPasswordToggle() {
                    this.passwordToggle.addEventListener('click', () => {
                        const type = this.passwordInput.type === 'password' ? 'text' : 'password';
                        this.passwordInput.type = type;
                        
                        this.passwordToggle.classList.toggle('show-password', type === 'text');
                    });
                }
                
                validateEmail() {
                    const email = this.emailInput.value.trim();
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    
                    if (!email) {
                        this.showError('email', 'Email address is required');
                        return false;
                    }
                    
                    if (!emailRegex.test(email)) {
                        this.showError('email', 'Please enter a valid email address');
                        return false;
                    }
                    
                    this.clearError('email');
                    return true;
                }
                
                validatePassword() {
                    const password = this.passwordInput.value;
                    
                    if (!password) {
                        this.showError('password', 'Password is required');
                        return false;
                    }
                    
                    // if (password.length < 8) {
                    //     this.showError('password', 'Password must be at least 8 characters long');
                    //     return false;
                    // }
                    
                    this.clearError('password');
                    return true;
                }
                
                showError(field, message) {
                    const formGroup = document.getElementById(field).closest('.form-group');
                    const errorElement = document.getElementById(`${field}Error`);
                    
                    formGroup.classList.add('error');
                    errorElement.textContent = message;
                    errorElement.classList.add('show');
                }
                
                clearError(field) {
                    const formGroup = document.getElementById(field).closest('.form-group');
                    const errorElement = document.getElementById(`${field}Error`);
                    
                    formGroup.classList.remove('error');
                    errorElement.classList.remove('show');
                    setTimeout(() => {
                        errorElement.textContent = '';
                    }, 200);
                }
                
                async handleSubmit(e) {
                    e.preventDefault();

                    const isEmailValid = this.validateEmail();
                    const isPasswordValid = this.validatePassword();

                    if (!isEmailValid || !isPasswordValid) {
                        return;
                    }

                    const url = this.form.action;
                    const formData = new FormData(this.form);

                    try {
                        const resp = await fetch(url, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            credentials: 'same-origin'
                        });

                        if (resp.status === 422) {
                            const json = await resp.json().catch(() => ({}));
                            const errors = json.errors || {};
                            // Show first server error as notification
                            const first = errors.email || errors.password || Object.values(errors)[0] || 'Terjadi kesalahan pada input.';
                            FormUtils.showNotification(first, 'error', this.form);
                            // For the generic credential error we prefer the top notification
                            if (errors.email && errors.email !== 'Email atau password salah') this.showError('email', errors.email);
                            if (errors.password) this.showError('password', errors.password);
                            return;
                        }

                        if (!resp.ok) {
                            FormUtils.showNotification('Terjadi kesalahan server. Silakan coba lagi.', 'error', this.form);
                            return;
                        }

                        const json = await resp.json().catch(() => null);
                        if (json && json.redirect) {
                            // Redirect immediately to avoid showing an intermediate empty login state
                            window.location.href = json.redirect;
                        } else {
                            // fallback: reload to follow any non-AJAX redirect
                            window.location.reload();
                        }

                    } catch (err) {
                        FormUtils.showNotification('Gagal menghubungi server. Periksa koneksi Anda.', 'error', this.form);
                    }
                }
                
                // loading visuals and intermediate success UI removed to allow immediate redirect
            }

            // Initialize the form when DOM is loaded
            document.addEventListener('DOMContentLoaded', () => {
                new CleanBankingLoginForm();
            });
        </script>
@endsection
