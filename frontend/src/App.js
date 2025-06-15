import React, { useState, useEffect } from 'react';

function App() {
    const [data, setData] = useState(null);
    const apiUrl = process.env.REACT_APP_API_URL;

    useEffect(() => {
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => setData(data))
            .catch(error => console.error('Erreur:', error));
    }, []);

    return (
        <div>
            <h1>Application React + PHP</h1>
            {data ? (
                <div>
                    <p>{data.message}</p>
                    <p>Timestamp: {data.timestamp}</p>
                </div>
            ) : (
                <p>Chargement...</p>
            )}
        </div>
    );
}

export default App;
