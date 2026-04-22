<html>

<body>
    <table border="solid">
        <tr>
            <td>
                No.
            </td>
            <td>
                title
            </td>
            <td>
                author
            </td>
            <td>
                description
            </td>
        </tr>

        <?php foreach ($books as $book):?>
            <tr>
                <td><?php echo $book->id?></td>
                <td>
                    <a href="index.php?book=<?php echo $book->id;?>"><?php echo $book->title;?></a>
                </td>
                <td>
                    <?php echo $book->author;?>
                </td>
                <td>
                    <?php echo $book->description;?>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
</body>

</html>