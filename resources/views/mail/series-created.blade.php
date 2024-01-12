@component('mail::message')
Uma nova série foi criada: {{ $nomeSerie }}

Quantidade de temporadas: {{ $qtdTemporadas }}
Número de episódios: {{ $episodiosPorTemporada }}

Acesse aqui:


@component('mail::button', ['url' => route('seasons.index', $idSerie)])
 Ver série
@endcomponent

@endcomponent
```