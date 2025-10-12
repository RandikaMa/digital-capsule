import React from 'react';
import { Navigate } from 'react-router-dom';
import { useApp } from '../contexts/app-context';

export const ProtectedRoute = ({ children }: any) => {
    const { initialData } = useApp();
    const isAuthenticated = !!initialData.user;

    if (!isAuthenticated) {
        return <Navigate to="/login" replace />;
    }

    return children;
};
