import React from 'react';
import ReactDOM from 'react-dom';
import cssPost from "./Post.module.css";
import Feedback from "./Feedback/Feedback";

let Post = () => {
    return (
        <div>
            <p>Пост бла бла</p>
            <Feedback />
        </div>
    );
};

export default Post;