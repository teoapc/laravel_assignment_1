@extends('master')
@section('title', 'FAQ')
@section('content')
    <div class="container">
        <div class="content">
            <center>
                <div class="title" id="faq-title">
                    <h1>FAQ</h1>
                </div>
            </center>
        </div>

        <div class="content-faq">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Frequently Asked Questions
                        </div>

                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Question</th>
                                    <th>Answer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>What kind of issues can we submit through this website?</td>
                                    <td>You can report any IT-related issue through this website. That includes network, online security and audio-visual issues.</td>
                                </tr>
                                <tr>
                                <td>I have a critical issue that has to be addressed ASAP. Who should I contact?</td>
                                <td>You can call <a href="">+61 3 992 58888</a> for urgent matters.</td>
                                </tr>
                                <tr>
                                <td>How long will it take for a member of the IT team to get back to me?</td>
                                <td>Our IT team is available Monday-Friday from 10 am to 5 pm. They regularly check the forms that are submitted to this website, so expect a response within 30 minutes of submission during working hours.</td>
                                </tr>
                                <tr>
                                    <td>Do you provide face-to-face or walk-up support?</td>
                                    <td>Absolutely. The following are our walk-up locations:
                                    <ul>
                                        <li>Swanston Academic Building (SAB) – Building 80 Level 3 - Monday to Friday 8.00 am to 8.00 pm, and Saturday 8.30 am to 4.30 pm.</li>
                                        <li>Bundoora Library - Monday to Friday - 9.00 am to 5.00 pm</li>
                                        <li>Brunswick Library - Monday to Friday - 9.00 am to 5.00 pm</li>
                                        <li>Carlton Library - Monday to Friday - 11.00 am to 2.00 pm</li>
                                    </ul>
                                    Due to the NAS project, the service point in Swanston library will reopen TBA</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection