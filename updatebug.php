<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update bug</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Jquery UI (Datepicker) -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    <div class="container">
        <h2 class="text-center my-4">Update Bug Page</h2>
        <div id="newBugForm" class="container">
            <form action="">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="program">Program</label>
                            <select class="form-control" id="program">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="report-type">Report type</label>
                            <select class="form-control" id="report-type">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="severity">Severity</label>
                            <select class="form-control" id="severity">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="form-group">
                            <label for="problem-summary">Problem summary</label>
                            <input type="text" class="form-control" id="problem-summary" placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="reporductible">Reproductible?</label>
                            <select class="form-control" id="reporductible">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label for="problem">Problem</label>
                            <textarea class="form-control" id="problem" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="reported-by">Reported by</label>
                            <select class="form-control" id="reported-by">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="reported-date" class="d-block">Date</label>
                            <input type="date" class="datepicker" placeholder="Date" name="reported-date" id="reported-date">
                          </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="functional-area">Functional Area</label>
                            <select class="form-control" id="report-type">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="assigned-to">Assigned to</label>
                            <select class="form-control" id="assigned-to">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <textarea class="form-control" id="comments" rows="2"></textarea>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="priority">Priority</label>
                            <select class="form-control" id="priority">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="resolution">Resolution</label>
                            <select class="form-control" id="resolution">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="resolution-v">Resolution version</label>
                            <select class="form-control" id="resolution-v">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
    
    
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="resolved-by">Resolved by</label>
                            <select class="form-control" id="resolved-by">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="resolved-date" class="d-block">Date</label>
                            <input type="date" class="datepicker" placeholder="Date" name="resolved-date" id="resolved-date">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tested-by">Tested by</label>
                            <select class="form-control" id="tested-by">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tested-date" class="d-block">Date</label>
                            <input type="date" class="datepicker" placeholder="Date" name="tested-date" id="tested-date">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="treat-as">Treat as?</label>
                            <select class="form-control" id="treat-as">
                              <option>YES</option>
                              <option>NO</option>
                              
                            </select>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                      aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                  </div>
                  <button class="btn btn-primary w-100 col-md-2" style="margin-left: 10px" type="submit">Add attachment</button>
                </div>
                
                <div class="row mt-3">
                    <div class="col-12 mb-3">
                        <button class="btn btn-primary w-100" type="submit">Submit</button>
                </div>

                    <div class="col-6">
                        <input class="btn btn-outline-primary w-100" type="reset" value="Reset">
                    </div>
                    <div class="col-6">
                        <a class="btn btn-outline-primary w-100 text-primary" role="button">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>
</html>