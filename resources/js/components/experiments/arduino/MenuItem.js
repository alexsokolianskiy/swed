import React from 'react';
import ExperimentTimer from './ExperimentTimer';

class ArduinoMenuItem extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <span class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            {trans(`all.${this.props.name}`)}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </span>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <span class="nav-link title" >
                                <i>{trans('experiments.tts')}:</i>
                                <ExperimentTimer time={this.props.tts}></ExperimentTimer>
                            </span>
                            <span class="nav-link title">
                                <i>{trans('experiments.tte')}:</i>
                                <ExperimentTimer time={this.props.tte}></ExperimentTimer>
                            </span>

                            <span class="nav-link title">
                                <i>{trans('experiments.queue_qty')}: </i>
                                <span class="badge badge-warning right">
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

export default ArduinoMenuItem;
