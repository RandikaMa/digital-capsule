import React from 'react';
import { Link } from 'react-router-dom';

export const App = () => {
    return (
        <div className="min-h-screen flex items-center justify-center">
            <div className="max-w-md w-full p-6 bg-white rounded shadow">
                <h1 className="text-2xl font-bold mb-4">Digital Capsule</h1>
                <p className="mb-4">Welcome to the base scaffold.</p>
                <Link to="/about" className="text-blue-600">About</Link>
            </div>
        </div>
    );
};
