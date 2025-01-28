
import React, { useEffect, useState } from 'react';
import axios from 'axios';

const Users = () => {
    const [users, setUsers] = useState([]);

    useEffect(() => {
        // Effectuer une requête GET à l'API pour récupérer les utilisateurs
        axios.get('/api/users')
            .then(response => {
                setUsers(response.data); // Met à jour l'état avec les données des utilisateurs
            })
            .catch(error => {
                console.error('There was an error fetching the users!', error);
            });
    }, []);

    return (
        <div>
            <h1>Users List</h1>
            <ul>
                {users.map(user => (
                    <li key={user.id}>{user.name}</li> // Affiche le nom de chaque utilisateur
                ))}
            </ul>
        </div>
    );
};

export default Users;