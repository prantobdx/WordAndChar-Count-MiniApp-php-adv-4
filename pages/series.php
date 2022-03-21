<?php include 'pages/includes/header.php';?>


<section class="py-5">
    <div class="container">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Series</h4>
                </div>
                <div class="card-body">
                    <form action="action.php" method="POST">
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">First Number</label>
                            <div class="col-md-8">
                                <input type="number" name="first_number" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Last Number</label>
                            <div class="col-md-8">
                                <input type="number" name="last_number" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Result</label>
                            <div class="col-md-8">
                                <input type="text" readonly value="<?php echo isset( $result ) ? $result : ''; ?>"
                                    class="form-control">
                                <!-- <textarea class="form-control" readonly cols="30" rows="10"> -->
                                <?php /*echo isset( $result ) ? $result['givenWord'] : '' ?> -----
                                <?php echo isset( $result ) ? $result['wordCount'] : '' ?> ------
                                <?php echo isset( $result ) ? $result['charcterCount'] : '' */?><?php //echo isset( $result ) ? "$givenWord\n$wordCount\n$charcterCount" : ''; ?>
                                <!-- </textarea> -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" name="seriesBtn" class="btn btn-outline-success btn-block"
                                    value="Get Result">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'pages/includes/footer.php';?>