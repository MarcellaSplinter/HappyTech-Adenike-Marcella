<?php
require_once 'common.php';
require_once 'templates.php'
?>
        
            <div class="container">
                <div id="Title">
                    <h3>Candidates Feedback Application</h3>
                </div>
                
                <nav>
                    <ul>
                        
                        <li><a href="Home.php">Home</a></li>
                <li class="current"><a href="Template.php">Templates</a></li>

                <li><a href="GenerateFeedback.html">Generate Feedback</a></li>
                <li><a href="Candidate.html">Saved Feedback</a></li>
                <li><a href="Department.html">Sent Feedback</a></li>
                <li><a href="DeletedFeedback.html">Deleted Feedback</a></li>


                    </ul>
                </nav>
            </div>
        </section>
    </header>

    <h3>List of Templates:</h3>
        
        <table> 
            <thead>
            <th>S/N</th>
            <th>Template Name</th>
            <th>Action</th>
            </thead>
        <?php 
        foreach (getAllTemplates () as $template) : 
            ?>
            <tr>
                <td><?php echo $template['id']?></td>
                
                <td><?php echo $template['title']?></td>
                <td> <a href="edit-template.php?id=<?php echo $template['id']?>"> Edit</a> /
                     <a href="DeletedFeedback.html">Delete</a>
                </td>
            </tr>
            <?php endforeach;
            ?>
            
                
        </table>

        <form action="createTemplate.php">
            <input type="submit" value="Create Template">
    </form>

        

        
    </section>




</body>
</html>
