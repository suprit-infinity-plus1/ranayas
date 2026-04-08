@extends('layouts.admin-master')
@section('title', 'Manage Products')
@section('content')





    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test Questions</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            /* CSS for labels */
            .label-container {
                margin-top: 20px;
                padding-top: 20px;
                border: 1px solid #ddd;
            }

            .label-container label {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-around;
                font-size: 14px;
            }
        </style>
    </head>

    <body>
        <h2>Test Questions</h2>

        <div class="label-container">
            <label for="name">
                <h5>Full Name: <span id="nihal">{{ $testQuestions->full_name }}</h5>
            </label>
            <label for="e-mail">
                <h5>E-mail id: <span id="e-mail">{{ $testQuestions->email }}</span></h5>
            </label>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Question No</th>
                    <th>Questions</th>
                    <th>Values Of Question</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>Do you ever find yourself asking people to repeat what they said during one-on-one conversations?
                    </th>
                    <th>{{ $testQuestions->radio2 }}</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Do you have difficulty understanding a conversation if the speaker is not looking straight at you?</th>
                    <th>{{ $testQuestions->radio3 }}</th>
                </tr>
                <tr>
                    <th>3</th>

                    <th>Do you have difficulty understanding group conversations?</th>
                    <th>{{ $testQuestions->radio4 }}</th>

                </tr>
                <tr>
                    <th>4</th>

                    <th>Do you have difficulty understanding group conversations?</th>
                    <th>{{ $testQuestions->radio5 }}</th>

                </tr>
                <tr>
                    <th>5</th>

                    <th>Do you often find that people mumble or talk too quietly, for example during conversations, on TV or when visiting your doctor?

                    </th>
                    <th>{{ $testQuestions->radio6 }}</th>

                </tr>
                <tr>
                    <th>6</th>


                    <th>
                        Do you often find that people talk too quickly?


                    </th>
                    <th>{{ $testQuestions->radio7 }}</th>

                </tr>
                <tr>
                    <th>7</th>

                    <th>What do you hear?

                    </th>
                    <th>{{ $testQuestions->radio8 }}</th>

                </tr>
                <tr>
                    <th>8</th>
                    <th>What do you hear?

                    </th>
                    <th>{{ $testQuestions->radio9 }}</th>

                </tr>
                <tr>

                    <th>9</th>

                    <th>What do you hear?

                    </th>
                    <th>{{ $testQuestions->radio10 }}</th>

                </tr>
                <tr>
                    <th>10</th>
                    <th>What do you hear?

                    </th>
                    <th>{{ $testQuestions->radio11 }}</th>

                </tr>
                <tr>
                    <th>11</th>

                    <th>What do you hear?

                    </th>
                    <th>{{ $testQuestions->radio12 }}</th>

                </tr>
                <tr>
                    <th>12</th>

                    <th>
                        Here we test how well you understand audioprompts in a noisy environment. Play the audioprompt on the right to start your first audio fragment. Please try to identify the word spoken by the narrator.

                    </th>
                    <th>{{ $testQuestions->radio13 }}</th>

                </tr>
            </tbody>
        </table>
    </body>

    </html>



@endsection
