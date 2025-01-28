import React from 'react';
import Users from './components/Users'; // Assure-toi que le chemin est correct

const App = () => {
    return (
        <div>
            <h1>Welcome to the User Management App</h1>
            <Users /> {/* Appelle le composant Users ici */}
        </div>
    );
};

export default App;