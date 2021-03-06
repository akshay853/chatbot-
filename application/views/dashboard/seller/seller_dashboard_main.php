
<div class="page-content">

    <div class="container-fluid">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Sales Dashboard</h2>
                <div class="page-content__header-description">Welcome to Sales Dashboard</div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="widget widget-remaining-time">
                    <h3 class="widget-remaining-time__heading">Dashboard <sup class="widget-remaining-time__heading-sup">012</sup></h3>
                    <div class="widget-remaining-time__block">
          <span class="widget-remaining-time__block-text">
            <span class="ua-icon-widget-clock widget-remaining-time__block-text-icon"></span>Remaining Time
          </span>
                        <span class="widget-remaining-time__block-time">00:22<span class="widget-remaining-time__block-time-seconds">:08</span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="widget widget-sales-total">
                    <div class="widget-sales-total__left-side">
                        <h5 class="widget-sales-total__heading">Total number<br> of event processed</h5>
                        <span class="widget-sales-total__amount">978</span>
                    </div>
                    <div class="widget-sales-total__right-side">
                        <span class="ua-icon-widget-charts widget-sales-total__icon"></span>
                        <div id="widget-sales-total-chart-event-proceed" class="widget-sales-total__chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget widget-sales-total">
                    <div class="widget-sales-total__left-side">
                        <h5 class="widget-sales-total__heading">Total number<br> of action executed</h5>
                        <span class="widget-sales-total__amount">345</span>
                    </div>
                    <div class="widget-sales-total__right-side">
                        <span class="ua-icon-widget-envelope widget-sales-total__icon"></span>
                        <div id="widget-sales-total-chart-action-executed" class="widget-sales-total__chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget widget-sales-total">
                    <div class="widget-sales-total__left-side">
                        <h5 class="widget-sales-total__heading">Total number<br> of customers</h5>
                        <span class="widget-sales-total__amount">561</span>
                    </div>
                    <div class="widget-sales-total__right-side">
                        <span class="ua-icon-widget-users widget-sales-total__icon"></span>
                        <div id="widget-sales-total-chart-customers" class="widget-sales-total__chart"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="widget widget-tabs widget-sales-customers">
                    <div class="widget-tabs__header">
                        <div>
                            Last 6 days <sup>Customers</sup>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#widget-day">Day</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#widget-week">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#widget-month">Month</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#widget-year">Year</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-tabs__content">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="widget-day">
                                <div id="widget-sales-customers-chart" class="widget-sales-customers__chart"></div>
                            </div>
                            <div class="tab-pane" id="widget-week">Week</div>
                            <div class="tab-pane" id="widget-month">Month</div>
                            <div class="tab-pane" id="widget-year">Year</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget widget-user-card">
                    <div class="widget-user-card__bg"></div>
                    <div class="widget-user-card__content">
                        <img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-9.png" alt="" width="120" height="120" class="widget-user-card__avatar">

                        <div class="widget-user-card__info">
                            <div class="widget-user-card__name">Rebecca Harris</div>
                            <div class="widget-user-card__occupation">Frontend Developer</div>
                        </div>

                        <div>
                            <a href="#" class="btn btn-info btn-rounded btn-lg widget-user-card__follow">Follow</a>
                        </div>
                    </div>
                    <div class="widget-user-card__statistics">
                        <div class="widget-user-card__statistics-item">
                            <span class="widget-user-card__statistics-amount">1420</span>
                            <span class="widget-user-card__statistics-type">Posts</span>
                        </div>
                        <div class="widget-user-card__statistics-item">
                            <span class="widget-user-card__statistics-amount">1.1m</span>
                            <span class="widget-user-card__statistics-type">Followers</span>
                        </div>
                        <div class="widget-user-card__statistics-item">
                            <span class="widget-user-card__statistics-amount">320</span>
                            <span class="widget-user-card__statistics-type">Following</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="widget widget-controls widget-step-distribution">
                    <div class="widget-controls__header">
                        <div>
                            <span class="widget-controls__header-icon ua-icon-widget-arrow-right"></span>
                            Step Distribution
                        </div>
                    </div>
                    <div class="widget-controls__content">
                        <div id="widget-step-distribution-chart" class="widget-step-distribution__chart"></div>
                        <div class="widget-step-distribution__labels">
                            <span class="badge-circle badge-circle-sm badge-circle-yellow-orange widget-step-distribution__label">201 <span>Confirm</span></span>
                            <span class="badge-circle badge-circle-sm badge-circle-fountain-blue widget-step-distribution__label">140 <span>Arrived</span></span>
                            <span class="badge-circle badge-circle-sm badge-circle-heliotrope widget-step-distribution__label">10 <span>Walk In</span></span>
                            <span class="badge-circle badge-circle-sm badge-circle-golden widget-step-distribution__label">25 <span>Canceled</span></span>
                            <span class="badge-circle badge-circle-sm badge-circle-waterlemon widget-step-distribution__label">130 <span>Pending</span></span>
                        </div>
                    </div>
                    <div class="widget-controls__footer">
                        <a href="#" class="widget-controls__footer-details"><span>Step details</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="widget widget-controls widget-sales-stats">
                    <div class="widget-controls__header">
                        <div>
                            <span class="widget-controls__header-icon ua-icon-widget-charts"></span>
                            Event Stats
                        </div>
                    </div>
                    <div class="widget-controls__content widget-sales-stats__content">
                        <div id="widget-sales-event-stats-chart" class="widget-sales-stats__chart"></div>
                        <div class="widget-sales-stats__labels">
                            <span class="badge-circle badge-circle-sm badge-circle-yellow-orange widget-sales-stats__label">201 <span>Confirm</span></span>
                            <span class="badge-circle badge-circle-sm badge-circle-fountain-blue widget-sales-stats__label">140 <span>Arrived</span></span>
                            <span class="badge-circle badge-circle-sm badge-circle-heliotrope widget-sales-stats__label">10 <span>Walk In</span></span>
                            <span class="badge-circle badge-circle-sm badge-circle-golden widget-sales-stats__label">25 <span>Canceled</span></span>
                            <span class="badge-circle badge-circle-sm badge-circle-waterlemon widget-sales-stats__label">130 <span>Pending</span></span>
                        </div>
                    </div>
                </div>
                <div class="widget widget-controls widget-sales-stats">
                    <div class="widget-controls__header">
                        <div>
                            <span class="widget-controls__header-icon ua-icon-widget-charts"></span>
                            Action Stats
                        </div>
                    </div>
                    <div class="widget-controls__content widget-sales-stats__content">
                        <div id="widget-sales-action-stats-chart" class="widget-sales-stats__chart"></div>
                        <div class="widget-sales-stats__labels">
                            <span class="badge-circle badge-circle-sm badge-circle-yellow-orange widget-sales-stats__label">201 <span>Confirm</span></span>
                            <span class="badge-circle badge-circle-sm badge-circle-fountain-blue widget-sales-stats__label">140 <span>Arrived</span></span>
                            <span class="badge-circle badge-circle-sm badge-circle-heliotrope widget-sales-stats__label">10 <span>Walk In</span></span>
                            <span class="badge-circle badge-circle-sm badge-circle-golden widget-sales-stats__label">25 <span>Canceled</span></span>
                            <span class="badge-circle badge-circle-sm badge-circle-waterlemon widget-sales-stats__label">130 <span>Pending</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <div class="widget widget-controls widget-table widget-date-paid">
                    <div class="widget-controls__header widget-controls__header--bordered">
                        <div>
                            <span class="widget-controls__header-icon ua-icon-widget-money"></span>
                            Payslips
                        </div>
                    </div>
                    <div class="widget-controls__content js-scrollable">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Date paid</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>17/08/2016</td>
                                <td><a href="#" class="btn btn-sm btn-gray">Download</a></td>
                            </tr>
                            <tr>
                                <td>17/08/2016</td>
                                <td><a href="#" class="btn btn-sm btn-gray">Download</a></td>
                            </tr>
                            <tr>
                                <td>17/08/2016</td>
                                <td><a href="#" class="btn btn-sm btn-gray">Download</a></td>
                            </tr>
                            <tr>
                                <td>17/08/2016</td>
                                <td><a href="#" class="btn btn-sm btn-gray">Download</a></td>
                            </tr>
                            <tr>
                                <td>17/08/2016</td>
                                <td><a href="#" class="btn btn-sm btn-gray">Download</a></td>
                            </tr>
                            <tr>
                                <td>17/08/2016</td>
                                <td><a href="#" class="btn btn-sm btn-gray">Download</a></td>
                            </tr>
                            <tr>
                                <td>17/08/2016</td>
                                <td><a href="#" class="btn btn-sm btn-gray">Download</a></td>
                            </tr>
                            <tr>
                                <td>17/08/2016</td>
                                <td><a href="#" class="btn btn-sm btn-gray">Download</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="widget widget-controls widget-table widget-notifications">
                    <div class="widget-controls__header widget-controls__header--bordered">
                        <div>
                            <span class="widget-controls__header-icon ua-icon-widget-notifications"></span>
                            Notifications
                        </div>
                    </div>
                    <div class="widget-controls__content js-scrollable">
                        <div class="widget-notifications__items">
                            <div class="widget-notifications__item">
                                <span class="ua-icon-widget-document widget-notifications__item-icon"></span>
                                <div class="widget-notifications__info">
                                    <div class="widget-notifications__name"><a href="#" class="widget-notifications__user">Sarah H.</a> approved your timesheet!</div>
                                    <span class="widget-notifications__date">12 min ago</span>
                                </div>
                            </div>
                            <div class="widget-notifications__item">
                                <span class="ua-icon-widget-document widget-notifications__item-icon"></span>
                                <div class="widget-notifications__info">
                                    <div class="widget-notifications__name"><a href="#" class="widget-notifications__user">Ken H.</a> approved your timesheet!</div>
                                    <span class="widget-notifications__date">12 min ago</span>
                                </div>
                            </div>
                            <div class="widget-notifications__item">
                                <span class="ua-icon-widget-document widget-notifications__item-icon"></span>
                                <div class="widget-notifications__info">
                                    <div class="widget-notifications__name"><a href="#" class="widget-notifications__user">Ken H.</a> <span class="color-error">declined</span> your timesheet!</div>
                                    <span class="widget-notifications__date">12 min ago</span>
                                </div>
                            </div>
                            <div class="widget-notifications__item">
                                <span class="ua-icon-widget-aircraft widget-notifications__item-icon"></span>
                                <div class="widget-notifications__info">
                                    <div class="widget-notifications__name"><a href="#" class="widget-notifications__user">Sarah H.</a> approved your timesheet!</div>
                                    <span class="widget-notifications__date">12 min ago</span>
                                </div>
                            </div>
                            <div class="widget-notifications__item">
                                <span class="ua-icon-widget-document widget-notifications__item-icon"></span>
                                <div class="widget-notifications__info">
                                    <div class="widget-notifications__name"><a href="#" class="widget-notifications__user">Sarah H.</a> approved your timesheet!</div>
                                    <span class="widget-notifications__date">12 min ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-controls__footer">
                        <a href="#" class="widget-controls__footer-view-all">Show previos week</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-beta widget-beta--green">
                    <div class="widget-beta__body">
                        <div class="widget-beta__heading">
                            <span class="ua-icon-users-group widget-beta__heading-icon"></span> New Clients
                        </div>
                        <div class="widget-beta__amount">459</div>
                        <div class="widget-beta__desc"><span class="ua-icon-chart-arrow-up widget-beta__desc-icon"></span> 15% from yesterday</div>
                    </div>
                    <div class="widget-beta__chart">
                        <div id="sparkline-chart-new-clients" class="widget-beta__chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-beta widget-beta--seance">
                    <div class="widget-beta__body">
                        <div class="widget-beta__heading">
                            <span class="ua-icon-wallet widget-beta__heading-icon"></span> Total Sales
                        </div>
                        <div class="widget-beta__amount">$8990.63</div>
                        <div class="widget-beta__desc"><span class="ua-icon-chart-arrow-up widget-beta__desc-icon"></span> 70% last month</div>
                    </div>
                    <div class="widget-beta__chart">
                        <div id="sparkline-chart-total-sales" class="widget-beta__chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-beta widget-beta--lynch">
                    <div class="widget-beta__body">
                        <div class="widget-beta__heading">
                            <span class="ua-icon-rating-up widget-beta__heading-icon"></span> Total Sales
                        </div>
                        <div class="widget-beta__amount">$806,52</div>
                        <div class="widget-beta__desc"><span class="ua-icon-chart-arrow-up widget-beta__desc-icon"></span> 80% from yesterday</div>
                    </div>
                    <div class="widget-beta__chart">
                        <div id="sparkline-chart-total-sales2" class="widget-beta__chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-beta widget-beta--purple">
                    <div class="widget-beta__body">
                        <div class="widget-beta__heading">
                            <span class="ua-icon-blank-document widget-beta__heading-icon"></span> New Invoice
                        </div>
                        <div class="widget-beta__amount">1806</div>
                        <div class="widget-beta__desc"><span class="ua-icon-chart-arrow-down widget-beta__desc-icon"></span> 3% from last month</div>
                    </div>
                    <div class="widget-beta__chart">
                        <div id="sparkline-chart-new-invoices" class="widget-beta__chart-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>


