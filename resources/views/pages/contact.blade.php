@extends('layouts.app')

@section('title')
    CONTACT
@endsection

@section('css')
@endsection

@section('content')
    <div class="body-content p-2 bg-white">
        <div class="row">
            <div class="col-md-12 mt-5 p-5">
                <form>
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="name" class="form-control" />
                        <label class="form-label" for="form4Example1">Name</label>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="message" rows="4"></textarea>
                        <label class="form-label" for="form4Example3">Message</label>
                    </div>

                    <!-- Submit button -->
                    <button type="button" id="send" class="btn form-control mb-4" style="background-color: #68c83e !important; color: white; font-size: 14px">Send To Contact</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')

<script>
    $('#send').click(function() {
        let name = $('#name').val();
        let message = $('#message').val();

        let text = `Name: ${name}, Message: ${message}`;

        window.location.href = `https://wa.me/6282325576616?text=${text}`;
    })
</script>
@endsection
