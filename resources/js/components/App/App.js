import React from 'react';
import ReactDOM from 'react-dom';
import Home from "../../pages/Home/Home";
import Header from "../Header/Header";
import Menu from "../Menu/Menu";
import Footer from "../Footer/Footer";
import cssApp from "./App.module.css";
import {BrowserRouter, Route} from "react-router-dom";
import Posts from "../../pages/Posts/Posts";

const App = () => {
    return (
        <BrowserRouter>
            <div className={cssApp.app_wrapper}>
                <Header />
                <Menu />
                <div className={cssApp.content}>
                    <Route exact path='/' component={Home} />
                    <Route exact path='/posts' component={Posts} />
                </div>
                <Footer />
            </div>
        </BrowserRouter>
    );
}


export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
