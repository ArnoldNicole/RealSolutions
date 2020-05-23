@extends('layouts.app')
@section('content')
<div class="container-fluid mt-5">
	<div class="row justify-content-center mt-3">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<a href="/admin/chat" class="btn btn-sm btn-info"> <i class="fa fa-envelope"></i> Get Talking</a>
				</div>
			</div>
			<div class="dropdown-divider"></div>
			<div class="card">
				<div class="card-body">
					
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card card-body">
				<div class="panel panel-default">
				                <div class="panel-heading">Chats</div>

				                <div class="panel-body">
				                    <chat-messages :messages="messages"></chat-messages>
				                </div>
				                <div class="panel-footer">
				                    <chat-form
				                        v-on:messagesent="addMessage"
				                        :user="{{ Auth::user() }}"
				                    ></chat-form>
				                </div>
				          </div>
				       
			</div>
		</div>
	</div>
</div>
@endsection