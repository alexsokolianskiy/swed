import React from 'react';
import ReactDOM from 'react-dom';
import Countdown from 'react-countdown';

class ExperimentTimer extends React.Component {
    render() {
        const timerTime = parseInt(this.props.time);
        if (isNaN(timerTime)) {
            return '';
        }
        return <span className="badge badge-info right">
                <Countdown date={Date.now() + timerTime} />
            </span>
    }
}

export default ExperimentTimer;

const elements = document.getElementsByClassName('exp-timer');

if (elements) {
    for (let element of elements) {
        const props = Object.assign({}, element.dataset);
        ReactDOM.render(<ExperimentTimer {...props} />, element);
    }
}
