<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $job->title }}</title>
    <style>
        .max-w-2xl {
            max-width: 42rem;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .bg-white {
            background-color: white;
        }

        .dark-bg-gray-900 {
            background-color: #1a202c;
        }

        .w-auto {
            width: auto;
        }

        .h-7 {
            height: 1.75rem;
        }

        .sm-h-8 {
            height: 2rem;
        }

        .mt-8 {
            margin-top: 2rem;
        }

        .text-gray-700 {
            color: #4a5568;
        }

        .dark-text-gray-200 {
            color: #e2e8f0;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .leading-loose {
            line-height: 1.75;
        }

        .text-gray-600 {
            color: #718096;
        }

        .dark-text-gray-300 {
            color: #d1d5db;
        }

        .font-semibold {
            font-weight: 600;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .font-medium {
            font-weight: 500;
        }

        .tracking-wider {
            letter-spacing: 0.05em;
        }

        .text-white {
            color: white;
        }

        .capitalize {
            text-transform: capitalize;
        }

        .transition-colors {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
        }

        .duration-300 {
            transition-duration: 300ms;
        }

        .transform {
            transform: none;
        }

        .bg-blue-600 {
            background-color: #3182ce;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .hover-bg-blue-500:hover {
            background-color: #4299e1;
        }

        .focus-outline-none:focus {
            outline: 0;
        }

        .focus-ring {
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
        }

        .focus-ring-blue-300:focus {
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
        }

        .focus-ring-opacity-80:focus {
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.8);
        }

        .text-gray-500 {
            color: #a0aec0;
        }

        .dark-text-gray-400 {
            color: #cbd5e0;
        }

        .text-blue-600 {
            color: #3182ce;
        }

        .hover-underline:hover {
            text-decoration: underline;
        }

        .dark-text-blue-400 {
            color: #63b3ed;
        }

        .mt-3 {
            margin-top: 0.75rem;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: #ffffff !important;
            /* Ensuring text is white */
            background-color: #3182ce;
            border-radius: 0.5rem;
            text-decoration: none;
            transition: background-color 300ms ease-in-out, box-shadow 300ms ease-in-out;
        }

        .btn:hover {
            background-color: #4299e1;
        }

        .btn:focus {
            outline: 0;
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.8);
        }

    </style>
</head>
<body>
    <section class="max-w-2xl px-6 py-8 mx-auto bg-white dark-bg-gray-900">
        <main class="mt-8">
            <h2 class="text-gray-700 dark-text-gray-200">Hi {{ auth()->user()->first_name }},</h2>

            <p class="mt-2 leading-loose text-gray-600 dark-text-gray-300">
                Your job: <span class="font-semibold">{{ $job->title }}</span> is live now!
            </p>

            <a href="{{ url('/jobs/' . $job->id) }}" class="btn">
                See the Job Details
            </a>

            <p class="mt-8 text-gray-600 dark-text-gray-300">
                Thanks, <br>
                {{ env('APP_NAME') }}
            </p>
        </main>

        <footer class="mt-8">
            <p class="text-gray-500 dark-text-gray-400">
                This email was sent to <a href="javascript:void(0)" class="text-blue-600 hover-underline dark-text-blue-400">{{ auth()->user()->email }}</a>.
            </p>

            <p class="mt-3 text-gray-500 dark-text-gray-400">© {{ date('Y') }} {{ env('APP_NAME') }}. All Rights Reserved.</p>
        </footer>
    </section>
</body>
</html>
