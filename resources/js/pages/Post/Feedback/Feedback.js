import React from 'react';
import ReactDOM from 'react-dom';
import cssFeedback from "./Feedback.module.css";
import FeedbackItem from "./FeedbackItem/FeedbackItem";

let Feedback = () => {
    return (
        <div>
            <div>
                <textarea></textarea>
                <button></button>
            </div>
            <FeedbackItem message="Норм" src="https://cdn.artcer.ru/files/pics/article/4_1.jpg" />
            <FeedbackItem message="Так себе" src="https://cdn.artcer.ru/files/pics/article/4_1.jpg" />
            <FeedbackItem message="Не очень" src="https://cdn.artcer.ru/files/pics/article/4_1.jpg" />
        </div>
    );
};

export default Feedback;