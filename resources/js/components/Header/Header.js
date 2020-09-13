import React from 'react';
import ReactDOM from 'react-dom';
import cssHeader from "./Header.module.css";

let Header = () => {
    return (
      <div className={cssHeader.header}>
          Шапка сайта
      </div>
    );
}

export default Header;