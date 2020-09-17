import React from 'react';
import ReactDOM from 'react-dom';
import cssPosts from './Posts.module.css';
import {NavLink} from "react-router-dom";
import PostItem from "../Post/PostItem/PostItem";

class Posts extends React.Component{

    constructor(props){
        super(props);
    }

    render(){
        return (
            <div>
                <PostItem id='1' text="Котик 1" src="https://vk.vkfaces.com/858416/v858416699/509d9/WYsLgRtHYy0.jpg"/>
                <PostItem id='2' text="Котик 2" src="https://vk.vkfaces.com/858416/v858416699/509d9/WYsLgRtHYy0.jpg"/>
            </div>
        );
    }
}


export default Posts;