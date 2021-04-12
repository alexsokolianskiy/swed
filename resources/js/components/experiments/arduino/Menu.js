import React from 'react';
import ReactDOM from 'react-dom';
import Countdown from 'react-countdown';
import ArduinoMenuItem from './MenuItem';

class ArduinoMenu extends React.Component {
    constructor(props) {
        super(props);
        console.log("menu props is", props);
    }
    render() {
        return <div>
            {Object.keys(this.props.menu).map((name) => {
                const obj = this.props.menu[name];
                return <ArduinoMenuItem tts={obj.tts} tte={obj.tte} name={name} queue_qty={obj.queue_qty} lang={this.props.lang}></ArduinoMenuItem>
            })}
        </div>
    }
}

export default ArduinoMenu;

const menu = document.getElementById('arduino-menu');

if (menu) {
    let json = null;
    const jsonStr = menu.getAttribute('data-menu');
    if (jsonStr) {
        try {
            json = JSON.parse(jsonStr);
        } catch (e) {
            console.log('wrong experiments json');
        }
    }
    const lang = menu.getAttribute('data-lang');
    if (!lang) {
        lang = 'en';
    }
    ReactDOM.render(<ArduinoMenu menu={json} lang={lang} />, menu);
}
