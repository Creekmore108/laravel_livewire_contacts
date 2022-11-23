
<form wire:submit.prevent="submit">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <br/>
  
    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter email" wire:model="email">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <br/>
  
    <div class="form-group">
        <label for="exampleInputbody">Body</label>
        <textarea class="form-control" id="exampleInputbody" placeholder="Enter Body" wire:model="body"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <br/>
  
    <button type="submit" class="btn btn-primary">Save Contact</button>
</form>

<div>
    <h1>Contacts</h1>
    <table class="border border-1 w-full mt-4">
        <thead class="border border-2">
            <tr>
                <th class="border border-2 text-center">Name</th>
                <th class="border border-2 text-center">Email</th>
                <th class="border border-2 text-center">Body</th>
            </tr>
        </thead>
        <tbody class="border border-2">
            @foreach($contacts as $contact)
            <tr class="ml-6"> 
                <th class="border border-2 ">{{ $contact->name }}</th>
                <th class="border border-2 ">{{ $contact->email }}</th>
                <th class="border border-2 ">{{ $contact->body }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
