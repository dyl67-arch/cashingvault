<?php
include "header.php";

// Build absolute image base URL (adjust '/accounts/libs/img_ups/' if your images live elsewhere)
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$baseUrl = $scheme . '://' . $_SERVER['HTTP_HOST'];
$imgBase = $baseUrl . '/accounts/libs/img_ups/';

// Queries
$sql   = "SELECT * FROM users_account WHERE verified='0'";
$query = mysqli_query($connected, $sql);

$vsql   = "SELECT * FROM users_account WHERE verified='1'";
$vquery = mysqli_query($connected, $vsql);

// Initialize counter
$counter = 1;
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Alerts (show once) -->
    <?php if (isset($_GET['resetMsgSuc'])) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo htmlspecialchars($_GET['resetMsgSuc']); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['resetMsgErr'])) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?php echo htmlspecialchars($_GET['resetMsgErr']); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
</div>

<div class="container-fluid">
    <h1 class="h3 mb-5 text-gray-800">Unverified Accounts:</h1>
    <div class="row">
        <table class="table table-sm table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Document Type</th>
                    <th scope="col">Front Page</th>
                    <th scope="col">Back Page</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($query === false): ?>
                    <tr><td colspan="8">Query error: <?php echo htmlspecialchars(mysqli_error($connected)); ?></td></tr>
                <?php elseif (mysqli_num_rows($query) === 0): ?>
                    <tr><td colspan="8">No record found</td></tr>
                <?php else: ?>
                    <?php while ($row = mysqli_fetch_assoc($query)): ?>
                        <?php if ((string)$row['deleted'] === '0'): ?>
                            <tr>
                                <th scope="row"><?php echo $counter++; ?></th>
                                <td><?php echo htmlspecialchars($row['firstname']); ?></td>
                                <td><?php echo htmlspecialchars($row['lastname']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['document_type']); ?></td>
                                <td>
                                    <?php if (!empty($row['img_front'])): ?>
                                        <a href="<?php echo $imgBase . rawurlencode($row['img_front']); ?>"
                                           target="_blank" rel="noopener noreferrer">Preview</a>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if (!empty($row['img_back'])): ?>
                                        <a href="<?php echo $imgBase . rawurlencode($row['img_back']); ?>"
                                           target="_blank" rel="noopener noreferrer">Preview</a>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="verify-account?id=<?php echo (int)$row['id']; ?>" class="btn btn-sm btn-success">Verify Document</a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="container-fluid mt-5">
    <h1 class="h3 mb-4 text-gray-800">Verified Accounts:</h1>
    <div class="row">
        <table class="table table-sm table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Document Type</th>
                    <th scope="col">Front Page</th>
                    <th scope="col">Back Page</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($vquery === false): ?>
                    <tr><td colspan="8">Query error: <?php echo htmlspecialchars(mysqli_error($connected)); ?></td></tr>
                <?php elseif (mysqli_num_rows($vquery) === 0): ?>
                    <tr><td colspan="8">No record found</td></tr>
                <?php else: ?>
                    <?php while ($row = mysqli_fetch_assoc($vquery)): ?>
                        <?php if ((string)$row['deleted'] === '0'): ?>
                            <tr>
                                <th scope="row"><?php echo $counter++; ?></th>
                                <td><?php echo htmlspecialchars($row['firstname']); ?></td>
                                <td><?php echo htmlspecialchars($row['lastname']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['document_type']); ?></td>
                                <td>
                                    <?php if (!empty($row['img_front'])): ?>
                                        <a href="<?php echo $imgBase . rawurlencode($row['img_front']); ?>"
                                           target="_blank" rel="noopener noreferrer">Preview</a>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if (!empty($row['img_back'])): ?>
                                        <a href="<?php echo $imgBase . rawurlencode($row['img_back']); ?>"
                                           target="_blank" rel="noopener noreferrer">Preview</a>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="unverify-account?id=<?php echo (int)$row['id']; ?>" class="btn btn-sm btn-warning">Unverify Document</a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "footer.php"; ?>
