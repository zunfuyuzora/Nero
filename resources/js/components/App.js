import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
} from 'react-router-dom';

import Home from './pages/Home';
import Login from './pages/Login';

function App(assetPath) {
    return (
        <Router>
            <nav className="navbar navbar-expand-md navbar-dark bg-primary shadow-sm sticky-top">
            <div className="container py-2">
                <Link className="navbar-brand" to="/react">
                    Nero
                </Link>
                
                <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul className="navbar-nav ml-auto">
                        <li className="nav-item">
                            <Link to="/react/shop" className="nav-link">Shop</Link>
                        </li>
                        <li className="nav-item">
                            <Link to="/react/blog" className="nav-link">Blog</Link>
                        </li>
                        <li className="nav-item">
                            <Link to="/react/about" className="nav-link">About</Link>
                        </li>
                        <li className="nav-item">
                            <Link to="/react/cart" className="nav-link">Cart</Link>
                        </li>
                        <li className="nav-item">
                            <Link to="/react/login" className="nav-link">Login</Link>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>
            <main id="main">
            <Switch>
                <Route path="/react/about">
                    <div>This is About</div>
                </Route>
                <Route path="/react/login">
                    <Login />
                </Route>
                <Route exact path="/react/">
                    <Home assetPath={assetPath} />
                </Route>
            </Switch>
            </main>
        </Router>
    );
}

export default App;

if (document.getElementById('app')) {
    const assetPath = document.getElementById('app').getAttribute('assetpath');
    console.log(assetPath);
    ReactDOM.render(<App assetPath={assetPath} />, document.getElementById('app'));
}
