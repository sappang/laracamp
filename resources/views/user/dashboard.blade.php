@extends('layouts.app')

@section('content')
     <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                <table class="table">
                    <tbody>
                        @forelse ($checkout as $checkout)
                            <tr class="align-middle">
                            <td width="18%">
                                <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>{{ $checkout->Camp->title }}</strong>
                                </p>
                                <p>
                                    {{ $checkout->created_at->format('M d, Y')}}
                                </p>
                            </td>
                            <td>
                                <strong>{{ $checkout->Camp->price }}K</strong>
                            </td>
                            <td>
                                @if ($checkout->is_paid)
                                    <strong class="text-success">Udah Bayar</strong>
                                @else
                                    <strong>Waiting for Payment</strong>
                                @endif
                            </td>
                            <td>
                                <a href="https://wa.me/0828282828?text= hi saya mw bertanya tentang {{ $checkout->Camp->title }}" class="btn btn-primary">
                                    Get Contact
                                </a>
                            </td>
                        </tr>
                        @empty

                            <td colspan="5">
                                <h3>No data</h3>
                            </td>
                            
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection