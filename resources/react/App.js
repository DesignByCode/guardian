import React from 'react'
import { BrowserRouter as Router, Switch, Route, NavLink } from 'react-router-dom'

const App = () => {
    return (
        <Router>
            <h1>React</h1>
            <NavLink to="/dashboard">Home</NavLink> &nbsp;
            <NavLink to="/dashboard/about">About</NavLink> &nbsp;
            <NavLink to="/dashboard/contact">Contact</NavLink> &nbsp;
            <NavLink to="/dashboard/test">test</NavLink>
            <br/>

            <Switch>
                <Route exact path="/dashboard" render={() => 'root'}/>
                <Route exact path="dashboard/about" render={() => 'about'}/>
                <Route exact path="dashboard/contact" render={() => 'contact'}/>
                <Route exact path="dashboard/test" render={() => 'test'}/>

            </Switch>



        </Router>
    )
}

export default App
