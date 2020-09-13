import React from 'react';
import ReactDOM from 'react-dom';
import cssMenu from "./Menu.module.css";
import {NavLink} from "react-router-dom";

let Menu = () => {
    return (
      <div className={cssMenu.menu}>
          Меню
          <NavLink to='/'>Главная</NavLink>
          <NavLink to='/posts'>Посты</NavLink>
          {/*<NavLink to='/other'>Другое</NavLink>*/}
      </div>
    );
}

export default Menu;