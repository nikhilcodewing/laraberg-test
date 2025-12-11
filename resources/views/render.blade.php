<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendered posts</title>
    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">
</head>
<body style="font-family: system-ui, -apple-system, 'Segoe UI', sans-serif; max-width: 960px; margin: 2rem auto; padding: 0 1rem;">
    <h1 style="font-size: 2rem; margin-bottom: 1.5rem;">Rendered posts</h1>

    @forelse ($posts as $post)
        <article style="margin-bottom: 2.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #e5e7eb;">
            <h2 style="font-size: 1.5rem; margin-bottom: 0.5rem;">
                {{ $post->title ?? 'Untitled' }}
            </h2>
            <div>
                {!! $post->render() !!}
            </div>
        </article>
    @empty
        <p style="color: #6b7280;">No posts yet. Submit content from the home page first.</p>
    @endforelse
</body>
</html>

