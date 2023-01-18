
   <!-- Open Ticket Modal-->
   <form class="needs-validation modal fade" method="post" id="open-ticket" tabindex="-1" novalidate>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Submit new ticket</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted font-size-sm">We normally respond tickets within 2 business days.</p>
                    <div class="form-group">
                        <label for="ticket-subject">Subject</label>
                        <input class="form-control" type="text" id="ticket-subject" required>
                        <div class="invalid-feedback">Please fill in the subject line!</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="ticket-type">Type</label>
                                <select class="form-control custom-select" id="ticket-type" required>
                                    <option value>Choose type</option>
                                    <option value="Website problem">Website problem</option>
                                    <option value="Partner request">Partner request</option>
                                    <option value="Complaint">Complaint</option>
                                    <option value="Info inquiry">Info inquiry</option>
                                </select>
                                <div class="invalid-feedback">Please choose ticket type!</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="ticket-priority">Priority</label>
                                <select class="form-control custom-select" id="ticket-priority" required>
                                    <option value>How urgent is your issue?</option>
                                    <option value="Urgent">Urgent</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                                <div class="invalid-feedback">Please choose how urgent your ticket is!</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ticket-description">Describe your issue</label>
                        <textarea class="form-control" id="ticket-description" rows="8" required></textarea>
                        <div class="invalid-feedback">Please provide ticket description!</div>
                    </div>
                    <div class="custom-file mb-3">
                        <input class="custom-file-input" type="file" id="file-input">
                        <label class="custom-file-label" for="file-input">Choose file...</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Submit Ticket</button>
                </div>
            </div>
        </div>
    </form>