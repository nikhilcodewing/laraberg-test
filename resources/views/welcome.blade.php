<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laraberg demo</title>

    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">

    <script src="https://unpkg.com/react@17.0.2/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@17.0.2/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/moment@2.29.4/min/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
</head>

<body>
    <main style="max-width: 960px; margin: 2rem auto; padding: 0 1rem;">
        <h1 style="font-family: system-ui, -apple-system, 'Segoe UI', sans-serif; font-size: 2rem; margin-bottom: 1rem;">
            Laraberg Gutenberg editor
        </h1>
        <p style="color: #374151; margin-bottom: 1rem;">
            This page shows the Laraberg Gutenberg editor replacing a textarea. On submit, the raw Gutenberg content is posted in the textarea value.
        </p>

        @if (session('status'))
            <div style="margin-bottom: 1rem; padding: 0.75rem 1rem; background: #ecfdf3; border: 1px solid #bbf7d0; color: #166534; border-radius: 0.5rem;">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div style="margin-bottom: 0.75rem;">
                <label for="title" style="display: block; font-weight: 600; margin-bottom: 0.25rem;">Title</label>
                <input
                    id="title"
                    name="title"
                    type="text"
                    value="{{ old('title') }}"
                    placeholder="Optional title"
                    style="width: 100%; max-width: 480px; padding: 0.5rem 0.6rem; border: 1px solid #d1d5db; border-radius: 0.375rem;"
                >
            </div>
            <textarea
                id="post-content"
                name="content"
                hidden
            >{!! old('content', '<!-- wp:paragraph --><p>Hello from Laraberg in Laravel.</p><!-- /wp:paragraph -->') !!}</textarea>

            <div style="margin-top: 1rem;">
                <button type="submit" style="padding: 0.6rem 1.1rem; border-radius: 0.5rem; border: 1px solid #d1d5db; background: #111827; color: #f9fafb; cursor: pointer;">
                    Submit content
                </button>
            </div>
        </form>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Laraberg.init('post-content', {
                height: '70vh',
            });
        });
    </script>

    
</body>

</html>