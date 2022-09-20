import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './App'
import './index.css'
import LandingPage from './pages/LandingPage/LandingPage';
import Login from './pages/Login/Login';

ReactDOM.createRoot(document.getElementById('root') as HTMLElement).render(
  <React.StrictMode>
    <App />
  </React.StrictMode>
)
