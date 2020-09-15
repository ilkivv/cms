const ADD_FEEDBACK = 'ADD_FEEDBACK';

const feedbackReducer = (state = {}, action) => {
    switch (action.type){
        case ADD_FEEDBACK:
            let newFeedback = {
                message:state.message
            }
            state.feedbacks.push(newFeedback)
            state.feedbackText = '';
            return state;
        default:
            return state;
    }
}

export default feedbackReducer;