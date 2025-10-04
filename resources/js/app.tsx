import '../css/app.css';

import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import { createRoot } from 'react-dom/client';
import { initializeTheme } from './hooks/use-appearance';

// Import pages (adjust paths as needed)
import Welcome from './pages/welcome';
import Dashboard from './pages/dashboard';
import Login from './pages/auth/login';
import Register from './pages/auth/register';
import Appearance from './pages/settings/appearance';
// Add more as needed

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

const root = createRoot(document.getElementById('app')!);

root.render(
    <Router>
        <Routes>
            <Route path="/" element={<Login canResetPassword={true} />} />
            <Route path="/dashboard" element={<Dashboard />} />
            <Route path="/login" element={<Login canResetPassword={true} />} />
            <Route path="/register" element={<Register />} />
            <Route path="/settings/appearance" element={<Appearance />} />
            <Route path="/settings/profile" element={<div>Profile Settings</div>} />
            <Route path="/settings/password" element={<div>Password Settings</div>} />
            <Route path="/settings/two-factor" element={<div>Two-Factor Settings</div>} />
            {/* Add more routes */}
        </Routes>
    </Router>
);

// This will set light / dark mode on load...
initializeTheme();
