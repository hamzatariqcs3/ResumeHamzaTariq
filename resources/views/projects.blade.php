@include('include.header')
           <!-- Projects Section-->
           <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="p-5" style="background-image">
                                            <h2 class="fw-bolder">Hotprospector</h2>
                                            <p>During my tenure as a web developer at Zam Software Solution, I played a pivotal role in enhancing Hotprospector, a comprehensive web application designed to streamline lead generation and management processes for businesses. In addition to contributing to the overall development of the application, my specific responsibilities included:</p>
                                            <ol>
                                                <li>Maintaining Reporting:
                                                    <ul>
                                                        <li>I took charge of maintaining and enhancing the reporting functionalities within Hotprospector. This involved
                                                            <ul>
                                                                <li>Creating detailed reports such as User's Call report and Logs to track communication activities and interactions with leads</li>
                                                                <li>Implementing dashboard metrics to provide users with real-time insights into key performance indicators, including total working hours, total won leads, conversion rates, and more</li>
                                                                <li>Customizing reports and dashboards based on user feedback and evolving business requirements, ensuring they remain relevant and actionable.</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>Creation of GLOBAL Inbox Feature:
                                                    <ul>
                                                        <li>One of the key features I developed for Hotprospector was the GLOBAL inbox. This feature centralized all incoming communication channels, including email, SMS, and phone calls, into a single unified inbox within the application.
                                                            <ul>
                                                                <li>
                                                                    Collaborating with the team to conceptualize and design the GLOBAL inbox feature based on client requirements and industry best practices.
                                                                </li>
                                                                <li>
                                                                    Implementing the feature using advanced backend technologies and APIs, ensuring seamless integration with external communication channels.
                                                                </li>
                                                                <li>
                                                                    Conducting thorough testing and validation to guarantee the reliability and functionality of the GLOBAL inbox across different devices and platforms.
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Management of Automations:
                                                    <ul>
                                                        <li>
                                                        I was responsible for managing and implementing automation workflows within Hotprospector. This included:
                                                            <ul>
                                                                <li>
                                                                    Collaborating with stakeholders to identify opportunities for automation in lead management processes.
                                                                </li>
                                                                <li>
                                                                    Designing and configuring automation rules and triggers to streamline repetitive tasks, such as lead assignment, follow-up reminders, and email notifications.
                                                                </li>
                                                                <li>
                                                                    Monitoring and optimizing automation workflows to ensure they align with business objectives and deliver maximum efficiency and effectiveness.
                                                                </li>

                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ol>
                                            <p>
                                                Through my contributions to Hotprospector, including enhancing reporting functionalities, creating the GLOBAL inbox feature, and managing automations, I played a crucial role in empowering businesses to optimize their lead management processes effectively and make data-driven decisions.
                                            </p>
                                        </div>
                                        <img class="img-fluid" src="assets/Projects/hotprospector.PNG" alt="hotprospector" />
                                    </div>
                                </div>
                            </div>
                            <!-- Project Card 2-->
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="p-5 text-justify">
                                            <h2 class="fw-bolder">BOEKI USA</h2>
                                            <b>Overview:</b>
                                            <p>As a part of the development team at ZAF Technologies, I've had the privilege to contribute to the creation of BOEKI USA, a cutting-edge CRM system tailored for the sale of cars and vehicle assets. Our goal with BOEKI USA is to provide a comprehensive solution that simplifies the management of car sales and inventory, while also offering advanced features for categorizing assets based on their condition.</p>
                                            <b>My Role</b>
                                            <p>In the BOEKI USA project, my primary responsibility is maintaining the frontend of the entire system. This involves ensuring that the user interface is intuitive, responsive, and user-friendly. Additionally, I'm tasked with generating detailed sales reports and creating sale bills to facilitate seamless transactions for our users.</p>
                                            <b>Technologies:</b>
                                            <p>Using my expertise in HTML, Bootstrap, JavaScript, jQuery, Ajax, and Laravel, I've helped bring BOEKI USA to life. These technologies have allowed us to build a dynamic and scalable platform that meets the diverse needs of our users.</p>
                                            <b>Key Features:</b>

                                            <ul>
                                                <li>
                                                    <b>Sale of Cars and Car Parts: </b>With BOEKI USA, users can easily manage the sale of both cars and car parts, streamlining their inventory and sales processes.
                                                </li>
                                                <li>
                                                    <b>Categorized Asset Management:</b> Our system categorizes assets based on condition parameters, empowering users to organize and track their inventory effectively.
                                                </li>
                                                <li>
                                                    <b>Sale Reports:</b> I've implemented robust reporting functionalities in BOEKI USA, enabling users to generate detailed sales reports to gain insights into their performance.
                                                </li>
                                                <li>
                                                    <b>Sale Bill Generation</b>Creating sale bills for transactions is now a breeze with BOEKI USA, ensuring accuracy and efficiency in the sales process.
                                                </li>
                                            </ul>
                                        </div>
                                        <img class="img-fluid" src="assets/Projects/boekiusa.PNG" alt="boekiusa" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('contact') }}">Contact me</a>
                    </div>
                </div>
            </section>
        </main>
        @include('include.footer')