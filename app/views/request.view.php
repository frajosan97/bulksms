<div class="card border-0 shadow">
    <div class="card-header bg-transparent border-0">
        <small class="text-muted">Enter client key to search</small>
    </div>
    <hr class="dividerDiv1 my-1">
    <div class="card-body">
        <div class="form-group">
            <label for="client_key"><span class="text-danger">*</span> Client Key</label>
            <input id="client_key" type="text" class="form-control" name="client_key" placeholder="Enter client key to start searching..." oninput="searchClient(this)" required />
        </div>
        <div class="col-12 py-2 clientData"></div>
    </div>
</div>