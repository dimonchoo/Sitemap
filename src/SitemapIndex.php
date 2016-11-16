<?php

namespace Thepixeldeveloper\Sitemap;

use XMLWriter;

/**
 * Class SitemapIndex
 *
 * @package Thepixeldeveloper\Sitemap
 */
class SitemapIndex implements OutputInterface
{
    /**
     * Array of Sitemap entries.
     *
     * @var OutputInterface[]
     */
    protected $sitemaps = [];

    /**
     * Add a new Sitemap object to the collection.
     *
     * @param OutputInterface $sitemap
     *
     * @return $this
     */
    public function addSitemap(OutputInterface $sitemap)
    {
        $this->sitemaps[] = $sitemap;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function generateXML(XMLWriter $XMLWriter)
    {
        foreach ($this->getSitemaps() as $sitemap) {
            $sitemap->generateXML($XMLWriter);
        }

    }

    /**
     * Get an array of Sitemap objects.
     *
     * @return OutputInterface[]
     */
    public function getSitemaps()
    {
        return $this->sitemaps;
    }
}
