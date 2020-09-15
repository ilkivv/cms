import React from 'react';
import ReactDOM from 'react-dom';
import cssFeedbackItem from "./FeedbackItem.module.css";

let FeedbackItem = (props) => {
    return (
        <div className={cssFeedbackItem.item}>
            <img className={cssFeedbackItem.img} src={props.image} />
            <p className={cssFeedbackItem.message}>
                {props.message}
            </p>
        </div>
    );
}

export default FeedbackItem;

