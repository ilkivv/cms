import React from 'react';
import ReactDOM from 'react-dom';
import Home from "../../pages/Home/Home";
import Header from "../Header/Header";
import Menu from "../Menu/Menu";
import Footer from "../Footer/Footer";
import cssApp from "./App.module.css";
import {BrowserRouter, Route} from "react-router-dom";
import Posts from "../../pages/Posts/Posts";
import store from '../../redux/store';

let App = () => {
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

let rerenderEntireTree = (state) => {
    if (document.getElementById('root')) {
        ReactDOM.render(<App state={state} dispath={}/>, document.getElementById('root'));
    }
}

rerenderEntireTree(store.getState());

store.subscribe(() =>{
    let state = store.getState()
    rerenderEntireTree(state);
});



export default App;