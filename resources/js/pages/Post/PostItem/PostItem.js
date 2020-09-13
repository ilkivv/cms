import React from 'react';
import ReactDOM from 'react-dom';
import cssPostItem from "./PostItem.module.css";
import {NavLink} from "react-router-dom";

const PostItem = (props) => {
    return (
        <div>
            <img className={cssPostItem.img} src={props.src}/>
            <p>props.text</p>
            <NavLink to={"/posts/" + props.id}>Далее</NavLink>
        </div>
    );
}

export default PostItem;