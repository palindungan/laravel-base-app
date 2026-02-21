<style>
    .insta-hover {
        border: none;
    }

    /* wrapper gambar: kotak sempurna */
    .img-wrapper {
        position: relative;
        width: 100%;
        aspect-ratio: 1 / 1;
        /* ⬅️ bikin kotak */
        overflow: hidden;
    }

    /* gambar */
    .img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* ⬅️ crop otomatis */
        transition: 0.3s ease;
    }

    /* overlay */
    .hover-info {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;

        display: flex;
        align-items: center;
        justify-content: center;

        opacity: 0;
        transition: 0.3s ease;
    }

    /* teks tengah */
    .hover-stats {
        display: flex;
        gap: 24px;
        font-size: 18px;
        font-weight: 600;
        white-space: nowrap;
    }

    /* efek hover */
    .insta-hover:hover img {
        transform: scale(1.05);
    }

    .insta-hover:hover .hover-info {
        opacity: 1;
    }
</style>
