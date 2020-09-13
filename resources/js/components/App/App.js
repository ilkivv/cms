import React from 'react';
import ReactDOM from 'react-dom';
import Home from "../../pages/Home/Home";
import Header from "../Header/Header";
import Menu from "../Menu/Menu";
import Footer from "../Footer/Footer";

function App() {
    return (
        <div className="container">
            <Header />
            <Menu />
            <Home />
            <Footer />
        </div>
    );
}


export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
