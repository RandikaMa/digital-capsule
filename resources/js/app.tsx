import { BrowserRouter as Router, Routes, Route, Navigate } from 'react-router-dom';
import { createRoot } from 'react-dom/client';
import { AppProvider } from './contexts/app-context';
import { ProtectedRoute } from './components/protected-route';
import './bootstrap';
import { App } from './components/App';
import { About } from './components/About';
import Login from './components/auth/Login';

const initialData = (window as any).__INITIAL_DATA__ || {};

const root = createRoot(document.getElementById('app')!);

root.render(
    <AppProvider initialData={initialData}>
        <Router>
            <Routes>
                <Route path="/" element={<App />} />
                <Route path="/about/:id" element={<About />} />
                <Route path="/login" element={<Login />} />
                <Route path="/protected" element={
                    <ProtectedRoute>
                        <div className="p-6">Protected</div>
                    </ProtectedRoute>
                } />
                <Route path="*" element={<Navigate to="/" replace />} />
            </Routes>
        </Router>
    </AppProvider>
);

