import {combineReducers, createStore} from "redux";
import feedbackReducer from "./reducers/feedback-reducer";

let redusers = combineReducers({
    feedbacks:feedbackReducer
});

let store = createStore(redusers);

export default store;