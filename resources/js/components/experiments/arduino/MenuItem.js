import React from 'react';
import ExperimentTimer from './ExperimentTimer';
import withTransHook from '../../../helpers/lang/withTransHook';
import Button from '@mui/material/Button';
import languageBundle from '@kirschbaum-development/laravel-translations-loader!@kirschbaum-development/laravel-translations-loader';
class ArduinoMenuItem extends React.Component {
    constructor(props) {
        super(props);
        console.log(this.props);
    }

    render() {
        const trans = this.props.trans;
        return <nav className="mt-2">
            <ul className="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li className="nav-item has-treeview">
                    <span className={this.props.active == this.props.name ? 'nav-link active' : 'nav-link'}>
                        <i className="nav-icon fas fa-copy"></i>
                        <p>
                            {trans(`all.${this.props.name}`)}
                            <i className="fas fa-angle-left right"></i>
                        </p>
                    </span>
                    <ul className="nav nav-treeview">
                        <li className="nav-item">
                            {(!this.props.tts && !this.props.tte) ?
                                <span className="nav-link title text-center">
                                    <Button size="small" variant="contained">{trans('experiments.stay_queue')}</Button>
                                </span>
                                :
                                <div>
                                    <span className="nav-link title" >
                                        <i>{trans('experiments.tts')}:</i>
                                        <ExperimentTimer time={this.props.tts}></ExperimentTimer>
                                    </span>
                                    <span className="nav-link title">
                                        <i>{trans('experiments.tte')}:</i>
                                        <ExperimentTimer time={this.props.tte}></ExperimentTimer>
                                    </span>
                                </div>
                            }


                            <span className="nav-link title">
                                <i>{trans('experiments.queue_qty')}: </i>
                                <span className="badge badge-warning right">
                                    {this.props.queue_qty}
                                </span>
                            </span>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    }
}

export default withTransHook(ArduinoMenuItem);
