<!-- @extends('layouts.master') -->
<!-- @section('title', 'Home') -->
<!-- @section('extracss')
<link rel="stylesheet" href="{!! asset('assets/css/main.13e0cec1.css') !!}">
@endsection
@section('content')
<div id="eashfit-hearing-test"></div> -->


<!-- laravel -->

<!-- <div class="divider"> -->
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256">
            <path fill="#d25200"
                d="M237.43 130.55C215.84 176.57 197 198 178 198c-23.83 0-39.2-32.76-55.47-67.45C109.26 102.17 94.17 70 78 70c-9.18 0-25 10.5-48.53 60.55a6 6 0 0 1-10.86-5.1C40.16 79.43 59 58 78 58c23.83 0 39.2 32.76 55.47 67.45C146.74 153.83 161.83 186 178 186c9.18 0 25.05-10.5 48.53-60.55a6 6 0 0 1 10.86 5.1Z" />
        </svg>
    </div>

    <section class="faqs-sec py-5 bg-light">
        <header class="text-center mb-5">
            <h2 class="fs-1 fw-normal">Frequently Asked Questions</h2>
        </header>
        <div class="faqs-wrapper d-flex flex-row align-items-stretch gap-3">
            <div class="col col-1">
                <figure>
                    <img src="assets/image/expressive-bearded-man-orange-tshirt.jpg" alt="frequently asked question image"
                        width="100%">
                </figure>
            </div>
            <div class="col col-2">
                <ul class="facs-accordion">
                    <li class="acc-tab border-bottom border-light-subtle"><input class="d-none" type="radio"
                            name="acc-tab" id="acc-tab-1">
                        <label class="bg-light py-2 d-flex  justify-content-between align-items-center" for="acc-tab-1">
                            <span class="fw-semibold">Are Vibe hearing aids rechargeable?</span>
                            <div class="acc-icon"><i class="fa fa-plus"></i></div>
                        </label>
                        <div class="acc-content overflow-hidden">
                            <p class="fs-6 py-1 px-2">Vibe Go and Vibe Complete are the only rechargeable hearing aids,
                                other require batteries.</p>
                        </div>
                    </li>
                    <li class="acc-tab border-bottom border-light-subtle"><input class="d-none" type="radio"
                            name="acc-tab" id="acc-tab-2">
                        <label class="bg-light py-2 d-flex  justify-content-between align-items-center" for="acc-tab-2">
                            <span class="fw-semibold">Can I still use headphones or earbuds while wearing Vibe?</span>
                            <div class="acc-icon"><i class="fa fa-plus"></i></div>
                        </label>
                        <div class="acc-content overflow-hidden">
                            <p class="fs-6 py-1 px-2">You can use over-the-ear headphones at the same time, just make sure
                                to turn the volume down first!</p>
                        </div>
                    </li>
                    <li class="acc-tab border-bottom border-light-subtle"><input class="d-none" type="radio"
                            name="acc-tab" id="acc-tab-3">
                        <label class="bg-light py-2 d-flex  justify-content-between align-items-center" for="acc-tab-3">
                            <span class="fw-semibold">Can I wear Vibe in the shower or in the pool?</span>
                            <div class="acc-icon"><i class="fa fa-plus"></i></div>
                        </label>
                        <div class="acc-content overflow-hidden">
                            <p class="fs-6 py-1 px-2">Like most hearing aids, Vibe devices aren’t waterproof, so you should
                                take it out before you shower or go swimming.</p>
                        </div>
                    </li>
                    <li class="acc-tab border-bottom border-light-subtle"><input class="d-none" type="radio"
                            name="acc-tab" id="acc-tab-4">
                        <label class="bg-light py-2 d-flex  justify-content-between align-items-center" for="acc-tab-4">
                            <span class="fw-semibold">Do I have to go get a hearing test?</span>
                            <div class="acc-icon"><i class="fa fa-plus"></i></div>
                        </label>
                        <div class="acc-content overflow-hidden">
                            <p class="fs-6 py-1 px-2">Vibe is ready to use right out of the box—all you need to do is charge
                                it up or put in the batteries. Depending on your country and hearing aid model, we offer a
                                personalized fitting either through customer service or your mobile phone.</p>
                        </div>
                    </li>
                    <li class="acc-tab border-bottom border-light-subtle"><input class="d-none" type="radio"
                            name="acc-tab" id="acc-tab-5">
                        <label class="bg-light py-2 d-flex  justify-content-between align-items-center" for="acc-tab-5">
                            <span class="fw-semibold">Does Vibe help me with tinnitus?</span>
                            <div class="acc-icon"><i class="fa fa-plus"></i></div>
                        </label>
                        <div class="acc-content overflow-hidden">
                            <p class="fs-6 py-1 px-2">Vibe isn’t designed to help with tinnitus. Please email <a
                                    href="mailto:easyfithearing@gmail.com">easyfithearing@gmail.com</a> or contact our
                                customer service team and we’ll refer you to some options for tinnitus help.</p>
                        </div>
                    </li>
                    <li class="acc-tab border-bottom border-light-subtle"><input class="d-none" type="radio"
                            name="acc-tab" id="acc-tab-6">
                        <label class="bg-light py-2 d-flex  justify-content-between align-items-center" for="acc-tab-6">
                            <span class="fw-semibold">How do I turn Vibe on and off?</span>
                            <div class="acc-icon"><i class="fa fa-plus"></i></div>
                        </label>
                        <div class="acc-content overflow-hidden">
                            <p class="fs-6 py-1 px-2">For models that require battery, simply open or close the battery
                                door. For rechargeable models, place it inside the charger case to turn off and remove to
                                turn on.</p>
                        </div>
                    </li>
                    <li class="acc-tab border-bottom border-light-subtle"><input class="d-none" type="radio"
                            name="acc-tab" id="acc-tab-7">
                        <label class="bg-light py-2 d-flex justify-content-between align-items-center" for="acc-tab-7">
                            <span class="fw-semibold">How often will I need to change the batteries?</span>
                            <div class="acc-icon"><i class="fa fa-plus"></i></div>
                        </label>
                        <div class="acc-content overflow-hidden">
                            <p class="fs-6 py-1 px-2">The battery life is 70 hours, or about 5-7 days of normal usage.
                                Opening the battery door reduces the battery drain and slightly reduces the moisture inside
                                the hearing aid. You may want to keep a few spare batteries in your bag in case you have to
                                swap them on the go.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="divider">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256">
            <path fill="#d25200"
                d="M237.43 130.55C215.84 176.57 197 198 178 198c-23.83 0-39.2-32.76-55.47-67.45C109.26 102.17 94.17 70 78 70c-9.18 0-25 10.5-48.53 60.55a6 6 0 0 1-10.86-5.1C40.16 79.43 59 58 78 58c23.83 0 39.2 32.76 55.47 67.45C146.74 153.83 161.83 186 178 186c9.18 0 25.05-10.5 48.53-60.55a6 6 0 0 1 10.86 5.1Z" />
        </svg>
    </div>
    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256">
            <path fill="#d25200"
                d="M160 214h-.3a5.8 5.8 0 0 1-5.3-3.9L95.5 55.6l-34 74.9A6.1 6.1 0 0 1 56 134H24a6 6 0 0 1 0-12h28.1l38.4-84.5a6 6 0 0 1 11.1.4l59.1 155.2l33.9-67.8a6 6 0 0 1 5.4-3.3h32a6 6 0 0 1 0 12h-28.3l-38.3 76.7a6.2 6.2 0 0 1-5.4 3.3Z" />
        </svg> --}}
    {{-- <figure>
            <img src="assets/image/levels-line.png" alt="">
        </figure> --}}

    <section class="some-info py-5 bg-light d-flex justify-content-between align-items-start gap-5">
        <div class="col-1">
            <header class="text-left mb-1">
                <h2 class="fs-3 fw-normal">Hearing test</h2>
            </header>
            <article class="text-secondary">
                <p class="mb-2 lh-base">Do you feel that your hearing is slowly getting worse? Perhaps you recognize the
                    problem that sounds
                    different than they used to in your everyday situations. For example, it may be that in a busy
                    environment you understand your company worse and therefore regularly have to ask for repetition. Or you
                    may find yourself turning up the volume of the television because you can’t understand it well. There
                    are different types of hearing loss. Some hearing problems are temporary, others are permanent. Social
                    contacts are important and therefore you would like to understand a friend or family member. A
                    professional hearing test can help you find out the quality of your hearing!</p>
                <p class="mb-2 lh-base">Do you have doubts about the quality of your hearing and want to know if you need a
                    hearing aid? You ask
                    yourself: “Where can I take a free hearing test near me?” Then take our free hearing test online! This
                    free audio testing can easily be done behind the computer. This means you do not have to leave the house
                    and you can do it at your own convenience in a quiet environment. Should you experience recurrent
                    problems with your hearing, it is highly recommended to take an hearing test online!</p>
                <p class="lh-base">You may also have doubts about your child’s hearing. An online hearing test for a child
                    can be advisable
                    in this case. We can provide a comprehensive free hearing test for a child in our Naarden hearing
                    center.</p>
            </article>
            <header class="text-left mb-1 mt-3">
                <h2 class="fs-3 fw-normal">Which hearing aid do I need?</h2>
            </header>
            <article class="text-secondary">
                <p class="lh-base">Our online audio testing will answer the question of whether you need a hearing aid, or
                    if you have perfect hearing. We indicate whether we think you would benefit from using a hearing aid.
                    Then you can get started with our automated hearing aid consultation, after which you will know which
                    type of hearing aid suits your needs and requirements. You can then order them online and try them out
                    at home.</p>
            </article>
        </div>

        <div class="col-2">
            <header class="text-left mb-1">
                <h2 class="fs-3 fw-normal">How does our online hearing test work?</h2>
            </header>
            <article class="text-secondary">
                <p class="mb-2 lh-base">Our free audio testing consists of two parts: filling out a questionnaire and
                    listening to a recorded
                    text. First you get a questionnaire about daily situations, which makes it clear when you suffer from
                    which hearing problems. Then you get to hear a recorded text. This gives us insight into your hearing
                    quality in a noisy environment. It is important that you do this part of the free hearing test online in
                    a quiet environment.</p>
                <p class="lh-base">Based on the free online audio testing, you will receive advice on wearing a hearing
                    aid. Should the
                    online hearing test result in a recommendation to wear a hearing aid, you will get immediate advice on
                    our hearing advice page. This way you will know what type of hearing aid to look for. This is because
                    there are many different types of hearing aids available, from invisible hearing aids and behind-the-ear
                    hearing aids (BTE) to in-the-ear hearing aids (ITE).</p>
            </article>
            <header class="text-left mb-1 mt-3">
                <h2 class="fs-3 fw-normal">Free hearing test near me? Take it online!</h2>
            </header>
            <article class="text-secondary">
                <p class="mb-2 lh-base">Our online hearing test provides insight into the quality of your hearing. This
                    will tell you whether you have a hearing loss. If it is, we can also tell you the degree of your hearing
                    loss. This helps you to better understand your hearing loss. Would you like more information about our
                    free hearing test online, the results of this audio testing or information about hearing in general?
                    Feel free to contact us, we are happy to help!</p>
                <p class="lh-base">You can also contact us with questions about our hearing aids. In our assortment you
                    will also find various aids that make the use of a hearing aid even more pleasant. Think of TV aids and
                    telephone aids. These make it even easier for you to hold a phone conversation or understand the
                    television. We have an eye for your ears!</p>
            </article>
        </div>
    </section>
<!-- @endsection -->




<!-- @section('extrajs') -->

<!-- <script src="{!! asset('assets/js/main.f6be58e7.js') !!}"></script> -->
<!-- <script> -->
        // const questionNoLine = document.querySelector(".question-no-line");
        for (const [index, i] of hearingTest.entries()) {
            // console.log(index);
            let li = document.createElement("li");
            li.setAttribute("id", `qno-list-id-${index + 1}`);
            // li.setAttribute("id",index+1);

            let span = document.createElement("span");
            span.innerHTML = index + 1;
            li.appendChild(span);

            const numberOfItems = hearingTest.length;
            const widthPercentage = 100 / numberOfItems;
            document.documentElement.style.setProperty('--list-item-width', `${widthPercentage}%`);

            document.querySelector(".question-no-line").append(li);
        }

        const hearingTestHTMl = document.querySelector(".htpw-part-2");

        for (const [index, i] of hearingTest.entries()) {
            // console.log(index, i);
            // console.log(i.length);
            // console.log(index);
            // console.log("<span>");

            // const liElement = document.createElement("li");
            // liElement.innerHTML = `<span>${index}</span>`;
            // questionNoLine.appendChild(liElement);
            //     questionNoLine.innerText = `
        //                     <li><span>${index}</span></li>
        // `;
            // <ul class="question-no-line">
            //          <li><span>${index+1}</span></li>
            //      </ul>

            // console.log(i.mediaType);
            let activeClass = index === 0 ? 'active' : "hide";
            // Build the HTML string inside the loop
            let htmlString = '';
            htmlString = `
                <div class="header-wrapper ${activeClass}" data-id="${index}">
                    <heading>
                        <div class="nums"><span>${i.part}</span></div>
                        <div class="about-question">
                            <h2>${i.heading}</h2>
                            <p>${i.title}</p>
                        </div>
                        <div class="media-type">${i.mediaType}</div>
                    </heading>
            
                    <div class="question-wrapper">
                        <form action="" onsubmit="return validateForm()">
                        <div class="questions">
                            <p>${i.question}<span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                <path fill="#d25200"
                                    d="m7.325 19.923l1.24-5.313l-4.123-3.572l5.431-.47L12 5.557l2.127 5.01l5.43.47l-4.122 3.572l1.24 5.313L12 17.102z" />
                                    </svg></span>
                            </p>
                        </div>
                        <div class="answers">
                                <ul>`;
            for (let faiz = 0; faiz < i.options.length; faiz++) {
                // Use a unique ID for each radio button
                // console.log("i", i);
                htmlString += `
                                    <li>
                                        <input type="${i.options[faiz].type}" id="no_${index}_${faiz}" name="question_${index}">
                                        <label for="no_${index}_${faiz}">${i.options[faiz].label}</label>
                                    </li>`;
            }

            // Complete the HTML string after the loop
            htmlString += `  
                                </ul>
                                `;
            const nextQuestionIndex = index + 1;
            const previousQuestionIndex = index - 1;
            if (index === 0) {
                // console.log(i.length);
                htmlString += `
                                    <button class="next-btn goto-second-question" onClick="changeQuestion(${nextQuestionIndex}, 'next')">next</button>
                                    `;
            } else if (index === (hearingTest.length) - 1) {
                htmlString += `
                                    <button class="next-btn goto-second-question" onClick="changeQuestion(${previousQuestionIndex}, 'prev')">previous</button>
                                    `;
            } else {
                htmlString += `
                                <button type="button" class="myclass next-btn goto-second-question" onClick="changeQuestion(${nextQuestionIndex}, 'next')">next</button>
                                <button type="button" class="mypreviousclass previous-btn goto-second-question" onClick="changeQuestion(${previousQuestionIndex}, 'prev')">previous</button>
                                </form> 
                                    `;
            }
            htmlString += `  
                        </div>
                    </div>
                </div>`;

            let getQuestionNoValue = document.querySelectorAll("#questionNo");
            // console.log(getQuestionNoValue);


            // Set the innerHTML after the loop is completed
            hearingTestHTMl.innerHTML += htmlString;
        }



        const startTestBtn = document.querySelector(".hearing-test-page .start-test");
        const startTest = document.querySelector(".hearing-test-page-wrapper");
        // const aboutTest = document.querySelector(".hearing-test-page-wrapper .htpw-part-1");
        // const firstQuestion = document.querySelector(".hearing-test-page-wrapper .htpw-part-2");
        // const questionContainer = document.querySelector(".question-container")
        // const gotoSecondQuestionBtn = document.querySelector(".first-question .goto-second-question")
        // const gotoFirstQuestionBtn = document.querySelector(".second-question .goto-first-question"),
        //     gotoThirdQuestionBtn = document.querySelector(".second-question .goto-third-question");
        // const goBackToSecondQuestionBtn = document.querySelector(".third-question .goto-second-question");
        // const gotoForthQuestionBtn = document.querySelector(".third-question .goto-forth-question");
        // // const secondQuestion = document.querySelector(".hearing-test-page-wrapper .htpw-part-2");

        // // let computedValueOfFirstTest = window.getComputedStyle(firstTest);
        // // if (computedValueOfFirstTest.getPropertyValue("opacity") === "0") {
        // //     console.log("jiiii");
        // // } else{
        // //     console.log("iiii");
        // //     startTestBtn.style.color="blue";
        // //     startTestBtn.style.display="none";
        // // }

        startTestBtn.addEventListener("click", () => {
            startTest.classList.add('test-started');
            console.log("hiii");
        });

        // gotoSecondQuestionBtn.addEventListener("click", () => {
        //     questionContainer.classList.add('secondQuestion');
        //     questionContainer.classList.remove('firstQuestion');
        //     // console.log("hiii");
        // });

        // gotoFirstQuestionBtn.addEventListener("click", () => {
        //     questionContainer.classList.add('firstQestion');
        //     questionContainer.classList.remove('secondQuestion');
        //     // console.log("hiii");
        // });

        // gotoThirdQuestionBtn.addEventListener("click", () => {
        //     questionContainer.classList.add('thirdQuestion');
        //     questionContainer.classList.remove('secondQuestion');
        //     // console.log("hiii");
        // });

        // goBackToSecondQuestionBtn.addEventListener("click", () => {
        //     questionContainer.classList.add('secondQuestion');
        //     questionContainer.classList.remove('thirdQuestion');
        //     // console.log("jiiii");
        // });

        // gotoForthQuestionBtn.addEventListener("click", () => {
        //     questionContainer.classList.add('forthQuestion');
        //     questionContainer.classList.remove('thirdQuestion');
        //     console.log("hiii");
        // });


        function changeQuestion(currentQuestionIndex, step) {
            const previousQuestionIndex = currentQuestionIndex - 1;
            const nextQuestionIndex = currentQuestionIndex + 1;
            if (step == 'next') {
                $(`[data-id="${previousQuestionIndex}"]`).hide();
            } else {
                $(`[data-id="${nextQuestionIndex}"]`).hide();
            }
            $(`[data-id="${currentQuestionIndex}"]`).show();
        }

        // function validateForm() {
        //     var radios = document.getElementsByName("yesno");
        //     var formValid = false;

        //     var i = 0;
        //     while (!formValid && i < radios.length) {
        //         if (radios[i].checked) formValid = true;
        //         i++;
        //     }

        //     if (!formValid) alert("Must check some option!");
        //     return formValid;
        // }

        var elements = document.querySelectorAll('.header-wrapper');
        // Iterate over the elements
        elements.forEach(function(element) {
            // Get the data-id attribute value
            var dataId = element.getAttribute('data-id');

            // Get the class names as a DOMTokenList
            var classList = element.classList;
            console.log(classList);

            // Convert the DOMTokenList to an array
            var classNamesArray = Array.from(classList);
            console.log(classNamesArray);

            // Log the class names and data-id for each element
            //   console.log('Data-id for element with class names ' + classNamesArray.join(', ') + ':', dataId);
        });
    </script>

<!-- @endsection -->