</main> <footer class="mt-5">
        <p>&copy; 2026 Eljona - Web Programming Exercise</p>
        <p>
            <?php 
                // 3.8 File Modification Time Logic
                $current_file = basename($_SERVER['PHP_SELF']);
                $file_last_modified = filemtime($current_file);
                echo "File: " . $current_file . " | Last modified: " . date("F d Y H:i:s.", $file_last_modified);
            ?>
        </p>
    </footer>
</body>
</html>