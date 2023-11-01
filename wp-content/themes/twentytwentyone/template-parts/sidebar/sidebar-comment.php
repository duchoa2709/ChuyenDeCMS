<style>
/* Sidebar styles */
.sidebar-right {
    width: 344px;
    height: 100%;
    background-color: #fff;
    color: #bbb;
    padding: 10px 15px;
}

.sidebar-right .sidebar-comment {
    height: 100%;
}

.sidebar-right>h1 {
    position: relative;
    font-size: 20px;
    color: #444;
    text-transform: none;
    text-shadow: none;
    display: inline-block;
}
.sidebar-right>h1:before{
    position: absolute;
    content: "";
    width: 60%;
    height: 40px;

    padding-bottom: 10px;
    border-bottom: 2px solid #6091ba;
}
</style>

<div class="sidebar-right w-1/4 rounded pb-4">
    <h1 class="font-bold mb-4">Comments</h1>
    <div class="sidebar-comment">
        <?php
$comments = get_comments(); // Lấy danh sách bình luận cho các bài viết trong trang web
if ($comments) { // Nếu có bình luận thì hiển thị
    foreach ($comments as $comment) { // Lặp danh sách bình luận

        echo '<div class="comment pl-3 py-1 border-b-2 text-[#488dc6] font-medium">';
        $comment_content = $comment->comment_content;// Lấy nội dung bình luận

        // Giới hạn số kí tự hiển thị
        $limit = 30; // Số kí tự bạn muốn giới hạn
        if (strlen($comment_content) > $limit) { // Nếu nội dung bình luận dài hơn số kí tự giới hạn
            $limited_content = substr($comment_content, 0, $limit);
            echo '<p>' . $limited_content . '...</p>';
        } else { // Nếu nội dung bình luận ngắn hơn số kí tự giới hạn
            echo '<p>' . $comment_content . '</p>';
        }
        echo '</div>';
    }
}
?>
    </div>
</div>