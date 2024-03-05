const router = require('express').Router();
const Post = require('../models/post');

router.post('/', async (req, res) => {
    const post = new Post({
        title: req.body.title,
        content: req.body.content
    });
    try {
        const savedPost = await post.save();
        res.json(savedPost);

    } catch (error) {
        res.json({ message: error });
    }
});

router.get('/:postId', async (req, res) => {
    try {
        const post = await Post.findById(ObjectId(req.params.postId));
        res.json(post);
    } catch (error) {
        res.json({ message: error });
    }
});

router.delete('/:postId', async (req, res) => {
    try {
        const removedPost = await Post.findByIdAndDelete(ObjectId(req.params.postId));
        res.json(removedPost);
    } catch (error) {
        res.json({ message: error });
    }
});

router.patch('/:postId', async (req, res) => {
    try {
        const updatedPost = await Post.findByIdAndUpdate(
            ObjectId(req.params.postId),
            { $set: { title: req.body.title, content: req.body.content } },
            { new: true }
        );
        res.json(updatedPost);
    } catch (error) {
        res.json({ message: error });
    }
});

module.exports = router;