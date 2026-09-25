# {!! __('messages.about.subtitle') !!}

## {!! __('messages.about.heading') !!}

{!! __('messages.about.paragraph_1') !!}

{!! __('messages.about.paragraph_2') !!}

{!! __('messages.about.paragraph_3') !!}

> {!! __('messages.about.closing') !!}

— {!! __('messages.about.signature_name') !!}, {!! rtrim(__('messages.about.signature_role'), ', ') !!}, {!! __('messages.about.signature_company') !!}

@include('markdown.partials.footer', ['htmlRoute' => 'about', 'markdownRoute' => 'about.markdown', 'parameters' => []])
